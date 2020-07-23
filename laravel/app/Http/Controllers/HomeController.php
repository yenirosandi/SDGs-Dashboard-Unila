<?php

namespace App\Http\Controllers;


use App\Goals_model;//tambahan
use App\Pencapaian_model;
use App\SubIndikator_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//n
use PDF;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        // ga butuh login untuk HOme controller
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $goals= Goals_model::all();
        return view('frontend.home', compact('goals'));
    }


    public function  linkGrafikIndi($id_indi)
    {
      // mengambil data dari table t_m_subindikator dimana "fk_id_indikator" mengacu pada $id_indi
      $sub =  DB::table('t_m_subindikator')
      ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
      ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
      ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
      ->select('t_m_subindikator.*','t_goals.nama_goal','t_m_indikator.indikator', 't_m_sumberdata.*')
      ->where('t_m_subindikator.fk_id_indikator', '=', $id_indi)
      ->orderBy('t_m_subindikator.id_m_subindikator')
      ->get();

      //##################################
      // start grafik garis
      //##################################
      $dataGrafik = [];
      $pt = 0;

      foreach ($sub as $key => $data_persub){
        $nilai = [];
        $goal = $data_persub->nama_goal;
        $indi = $data_persub->indikator;
        $subindi[] = $data_persub->subindikator."(".$data_persub->sumberdata.")";
        $subindi1[] = $data_persub->subindikator;
        $id_goal = $data_persub->fk_id_goal;
        $subdata = $data_persub->id_m_subindikator;
        $tahun = 2018;
        $tahun_now = date("Y");

        $pencapaian = DB::table('t_pencapaian')
        // ->join('t_trends','t_pencapaian.fk_id_trend','=','t_trends.id_trend')
        ->join('t_trends', 'fk_id_trend', '=', 't_trends.id_trend')
        ->select('t_pencapaian.*', 't_trends.*')
        ->where('t_pencapaian.fk_id_indikator', '=', $id_indi)
        ->where('t_pencapaian.fk_id_m_subindikator', '=', $subdata)
        ->orderBy('t_pencapaian.tahun')
        ->groupBy('t_pencapaian.tahun')
        ->get();
        // dd($pencapaian);

        // jika isian berupa angka maka eksekusi kode dibawah ini
        if ($data_persub->isian=='Angka') {
          // melakukan input null ke array $nilai1 berdasarkan index tahun
          $nilai1 = [];
          for ($tahun=2018; $tahun<= $tahun_now; $tahun++) {
            $nilai1[$tahun] = null;
          }
          // melakukan input nilai capaian ke array $nilai1 berdasarkan index tahun
          for ($tahun=2018; $tahun <= $tahun_now; $tahun++) {
            foreach ($pencapaian as $key2 => $capai) {
              if ($capai->tahun == $tahun) {
                $nilai1[$tahun] = (int)$capai->nilai;
              }
            }
          }
        // jika isian berupa text maka eksekusi kode dibawah ini
        } else {
          // melakukan input null ke array $nilai1 berdasarkan index tahun
          $nilai1 = [];
          for ($tahun=2018; $tahun<= $tahun_now; $tahun++) {
            $nilai1[$tahun] = null;
          }
          // melakukan input nilai capaian ke array $nilai1 berdasarkan index tahun
          for ($tahun=2018; $tahun <= $tahun_now; $tahun++) {
            foreach ($pencapaian as $key2 => $capai) {
              if ($capai->tahun == $tahun) {
                $nilai1[$tahun] = $capai->poin+$pt;
              }
              $pt=$capai->poin+$pt;
            }
          }
        }
        // melakukan rebuild array dari $nilai1 ke $nilai untuk mendapatkan urutan index array dari "0" bukan berdasarkan "tahun" lagi
        $i=0;
        foreach($nilai1 as $n) {
          $nilai[$i] = $n;
          $i++;
        }
        // melakukan input data array ke $dataGrafik
        $dataGrafik[$key]['name'] = $data_persub->subindikator."-". $data_persub->sumberdata;
        $dataGrafik[$key]['data'] = $nilai;
      }


      //##################################
      // start grafik batang
      //##################################
      $dataGrafik2 = [];
      $pt = 0;

      $pencapaian = DB::table('t_pencapaian')
      ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
      ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
      ->select('t_pencapaian.*','t_m_indikator.id_indikator', 't_m_subindikator.*')
      ->where('t_pencapaian.fk_id_indikator', $id_indi)
      ->orderBy('t_pencapaian.fk_id_m_subindikator')
      ->orderBy('t_pencapaian.tahun')
      ->groupBy('t_pencapaian.tahun')
      ->get();

      foreach ($pencapaian as $key => $data_persub) {
        $nilai = [];
        $tahun = $data_persub->tahun;
        $id_sub = $data_persub->fk_id_m_subindikator;

        $pencapaian2= DB::table('t_pencapaian')
        ->join('t_trends','fk_id_trend','=','t_trends.id_trend')
        ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
        ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
        ->select('t_pencapaian.*', 't_trends.*', 't_m_indikator.id_indikator','t_m_subindikator.*')
        ->where('t_pencapaian.fk_id_indikator', $id_indi)
        ->where('t_pencapaian.tahun', $tahun)
        ->orderBy('t_pencapaian.fk_id_m_subindikator')
        ->orderBy('t_pencapaian.tahun')
        ->groupBy('t_pencapaian.fk_id_m_subindikator')
        ->get();

        // jika isian berupa angka maka eksekusi kode dibawah ini
        if ($data_persub->isian == 'Angka') {
          // melakukan input null ke seluruh index pada array $nilai1
          $nilai1 = [];
          for ($index = 0; $index < count($subindi1); $index++) {
            // serta mengubah parameter index pada array $nilai1 dengan array $subindi1
            $nilai1[$subindi1[$index]] = null;
          }
          // melakukan input nilai capaian ke array $nilai1 berdasarkan tahun
          for ($tahun = 2018; $tahun <= $tahun_now; $tahun++) {
            foreach ($pencapaian2 as $key2 => $capai) {
              if ($capai->tahun == $tahun) {
                // menginput data array berupa capaian dengan parameter index mengacu ke $capai->subindikator
                $nilai1[$capai->subindikator] = (int)$capai->nilai;
              }
            }
          }
        // jika isian berupa text maka eksekusi kode dibawah ini
        } else {
          // melakukan input null ke seluruh index pada array $nilai1
          $nilai1 = [];
          for ($index = 0; $index < count($subindi1); $index++) {
            // serta mengubah parameter index pada array $nilai1 dengan array $subindi1
            $nilai1[$subindi1[$index]] = null;
          }
          // melakukan input nilai capaian ke array $nilai1 berdasarkan tahun
          for ($tahun = 2018; $tahun <= $tahun_now; $tahun++) {
            foreach ($pencapaian2 as $key2 => $capai) {
              if ($capai->tahun == $tahun) {
                // menginput data array berupa capaian dengan parameter index mengacu ke $capai->subindikator
                $nilai1[$capai->subindikator] = $capai->poin+$pt;
              }
              $pt = $capai->poin+$pt;
            }
          }
        }
        // melakukan rebuild array dari $nilai1 ke $nilai untuk mendapatkan urutan index array dari "0" bukan berdasarkan "$subindi1" lagi
        $i = 0;
        foreach($nilai1 as $n) {
          $nilai[$i] = $n;
          $i++;
        }

        $dataGrafik2[$key]['name'] = "Tahun ".$data_persub->tahun;
        $dataGrafik2[$key]['data'] = $nilai;
      }


      //##################################
      // start grafik pie
      //##################################
      $dataGrafik3 = [];
      $pt=0;
      $tahun_now=date('Y');

      // mengambil data dari table t_m_subindikator dimana "fk_id_indikator" mengacu pada $id_indi
      $sub = DB::table('t_m_subindikator')
      ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
      ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
      ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
      ->select('t_m_subindikator.*','t_goals.nama_goal','t_m_indikator.indikator', 't_m_sumberdata.*')
      ->where('t_m_subindikator.fk_id_indikator', '=', $id_indi)
      ->orderBy('t_m_subindikator.id_m_subindikator')
      ->get();

      foreach ($sub as $key => $data_persub){
        $goal = $data_persub->nama_goal;
        $indi = $data_persub->indikator;
        $id_goal = $data_persub->fk_id_goal;
        $subdata = $data_persub->id_m_subindikator;
        $tahun = 2018;

        $pencapaian = DB::table('t_pencapaian')
        ->join('t_trends', 'fk_id_trend', '=', 't_trends.id_trend')
        ->select('t_pencapaian.*', 't_trends.*')
        ->where('t_pencapaian.fk_id_indikator', '=', $id_indi)
        ->where('t_pencapaian.fk_id_m_subindikator', '=', $subdata)
        ->orderBy('t_pencapaian.tahun')
        ->groupBy('t_pencapaian.tahun')
        ->get();

        // jika isian berupa angka maka eksekusi kode dibawah ini
        if ($data_persub->isian=='Angka') {
          // melakukan input null ke array $nilai berdasarkan index tahun
          $nilai = [];
          for ($tahun=2018; $tahun<= $tahun_now; $tahun++) {
            $nilai[$tahun] = null;
          }
          // melakukan input nilai capaian ke array $nilai berdasarkan index tahun
          for ($tahun=2018; $tahun <= $tahun_now; $tahun++) {
            foreach ($pencapaian as $key2 => $capai) {
              if ($capai->tahun == $tahun) {
                $nilai[$tahun] = (int)$capai->nilai;
              }
            }
          }
        // jika isian berupa text maka eksekusi kode dibawah ini
        } else {
          // melakukan input null ke array $nilai berdasarkan index tahun
          $nilai = [];
          for ($tahun=2018; $tahun<= $tahun_now; $tahun++) {
            $nilai[$tahun] = null;
          }
          // melakukan input nilai capaian ke array $nilai berdasarkan index tahun
          for ($tahun=2018; $tahun <= $tahun_now; $tahun++) {
            foreach ($pencapaian as $key2 => $capai) {
              if ($capai->tahun == $tahun) {
                $nilai[$tahun] = $capai->poin+$pt;
              }
              $pt=$capai->poin+$pt;
            }
          }
        }

        $dataGrafik3[$key]['name'] = $data_persub->subindikator."-". $data_persub->sumberdata;
        // mengambil data capaian dari array $nilai dengan parameter index $tahun_now
        $dataGrafik3[$key]['y'] = $nilai[$tahun_now];
      }

      // passing data
      return view('frontend.detail_grafik_indi',
            compact('id_goal','goal','indi','tahun_now','dataGrafik','subindi','dataGrafik2', 'dataGrafik3'));
    }


    public function detailGoal(Request $req, $id){
      $no=1;
      $tahun=2018;
      $baseline=2018;
      $tahun_now=date('Y');
      $indikator='';
      $subindi='';
      $kurang=$tahun_now-$baseline;
      $kolomtahun=$kurang+$kurang;
      // $kolomtahun=$tahun_now-$tahun+2;
      // dd($kolomtahun);
      $kolomindi=$kolomtahun+5;
      $goalTbl=Goals_model::find($id);

      // Untuk select di goal detail
      $thn_didb= DB::table('t_pencapaian')
          ->select('t_pencapaian.tahun')
          ->groupBy('tahun')
          ->orderBy('tahun')
          ->get();
      // DD($thn_skr);

      $method = $req->method();

      if ($req->isMethod('post'))
      {
          $from = $req->input('from');
          //sementara
          $to=$from+4;
          // $to   = $req->input('to');


          if ($req->has('search'))
          {
            $no=1;
            $tahun=2018;
            $tahun_now=date('Y');
            $indikator='';
            $subindi='';
            $kurang=$tahun_now-$tahun;
            $kolomtahun=$kurang+$kurang;
            // $kolomtahun=$tahun_now-$tahun+2;
            // dd($kolomtahun);
            $kolomindi=$kolomtahun+5;


              // select search
              $data=DB::table('t_m_subindikator')
              ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
              ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
              ->where('t_m_subindikator.fk_id_goal', $id)
              ->orderBy('t_m_subindikator.fk_id_indikator')
              ->get();
              // DD($data);

              $viewdata_capai=DB::table('t_pencapaian')
                ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
                ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
                ->join('t_trends','fk_id_trend','=','t_trends.id_trend')
                ->select('t_pencapaian.*','t_goals.*','t_m_subindikator.*','t_trends.keterangan as keterangan_trend','t_trends.simbol_trend')
                ->where('t_pencapaian.fk_id_goal', '=', $id)
                ->whereBetween('tahun', [$from, $to])
                ->orWhere('tahun' , '=', $tahun)

                // ->where('tahun','=', $tahun_capai)
                ->orderBy('t_pencapaian.tahun')
                ->orderBy('t_m_subindikator.id_m_subindikator')
                ->get();
                // DD($data_capai);

                $goalTbl=Goals_model::find($id);

                $goal_detail= DB::table('t_goals')->where('id_goal', $id)->get();

              return view('frontend.goal_detail',['data' => $data,
                                                  'baseline' => $baseline,
                                                  'viewdata_capai' => $viewdata_capai,
                                                   'goal_detail'=> $goal_detail,
                                                   'goalTbl' => $goalTbl,
                                                   'id'=>  $id,
                                                   'no' => $no,
                                                   'tahun' => $tahun,
                                                   // 'tahun_now' => $tahun_now,
                                                   'indikator' => $indikator,
                                                   'subindi' => $subindi,
                                                   'kurang' => $kurang,
                                                   'kolomtahun' => $kolomtahun,
                                                   'kolomindi' => $kolomindi,
                                                   ]);
          }


          elseif ($req->has('exportPDF'))
          {

              // select PDF
              $data=DB::table('t_m_subindikator')
              ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
              ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
              ->where('t_m_subindikator.fk_id_goal', $id)
              ->orderBy('t_m_subindikator.fk_id_indikator')
              ->get();
              // DD($data);

              $data_capai=DB::table('t_pencapaian')
                ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
                ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
                ->join('t_trends','fk_id_trend','=','t_trends.id_trend')
                ->select('t_pencapaian.*','t_goals.*','t_m_subindikator.*','t_trends.keterangan as keterangan_trend','t_trends.simbol_trend')
                ->where('t_pencapaian.fk_id_goal', '=', $id)
                ->whereBetween('tahun', [$from, $to])
                ->orderBy('t_pencapaian.tahun')
                ->orderBy('t_m_subindikator.id_m_subindikator')
                ->get();

              $TahunMax=DB::table('t_pencapaian')
                ->select('t_pencapaian.*')
                ->where('t_pencapaian.fk_id_goal', '=', $id)
                ->whereBetween('tahun', [$from, $to])
                ->max('tahun');
                // DD($TahunMax);

              //kolomnya
              $kurangPdf=$TahunMax-$from;
              $kolomtahunPdf=$kurangPdf*2;
              $kolomindiPdf=$kolomtahunPdf+5;

              $ada_data_capai=DB::table('t_m_indikator')
                ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
                ->select('t_m_indikator.*','t_goals.*')
                ->where('t_m_indikator.fk_id_goal', '=', $id)
                ->orderBy('t_m_indikator.id_indikator')
                ->get();
              $countCapai= count($ada_data_capai);
                // DD($countCapai);


            $goal_detail_pdf= PDF::loadView('layout.pdfDetailGoal',
              compact('id',
                'thn_didb',
                'kolomindi',
                'kolomtahun',
                'subindi',
                'data',
                'TahunMax',
                'tahun',
                'indikator',
                'countCapai',
                'tahun_now',
                'data_capai',
                'goalTbl',
                'no',
                'from',
                'to',
                'kolomtahunPdf',
                'kolomindiPdf'
                // 'sub',
                ))->setPaper('a4');


            return $goal_detail_pdf->stream();
          }
      }
          else
      {
          //select all

          $data=SubIndikator_model::orderby('fk_id_indikator')->orderby('subindikator')
          ->where('fk_id_goal', $id)
          ->get();

          $dcapai=Pencapaian_model::orderby('tahun')->orderby('fk_id_m_subindikator')
          ->where('fk_id_goal', $id)
          ->get();
          // $dcapai=Pencapaian_model::distinct()->orderby('tahun')->orderby('fk_id_m_subindikator')
          // ->where('fk_id_goal', $id)
          // // ->groupBy('fk_id_m_subindikator')
          // ->get();
          // // dd($dcapai);

          $groups = Pencapaian_model::orderBy('tahun')->groupBy('fk_id_m_subindikator')->get();

          // $headers = MyModel->distinct()->orderBy('subject')->get();
          // $groups = MyModel->orderBy('subject')->get()->groupBy('student');
          
          // //headers
          // @foreach($headers as $header)
          //     <th>{{  $header->subject }}</th>



        $goal_detail= DB::table('t_goals')->where('id_goal', $id)->get();
        return view('frontend.goal_detail',
          compact('id',
            'kolomindi',
            'thn_didb',
            'kolomtahun',
            'subindi',
            'data',
            // 'null',
            'tahun',
            'baseline',
            'indikator',
            'tahun_now',

            'no',
            // 'sub',
            'goal_detail','dcapai'));
      }

    }

}
