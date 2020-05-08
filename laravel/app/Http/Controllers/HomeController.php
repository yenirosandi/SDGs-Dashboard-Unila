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

      $sub=  DB::table('t_m_subindikator')
      ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
      ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
      ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
      ->select('t_m_subindikator.*','t_goals.nama_goal','t_m_indikator.indikator', 't_m_sumberdata.*')
      ->where('t_m_subindikator.fk_id_indikator', '=', $id_indi)
      ->orderBy('t_m_subindikator.id_m_subindikator')
      ->get();
      // dd($sub);

      //accu nih
      //grafik garis
      $dataGrafik = [];
      $pt=0;
      foreach ($sub as $key => $data_persub){
        $nilai=[];
        $tahun=[];
        $subindi[] = $data_persub->subindikator." (".$data_persub->sumberdata.")";
        $goal=$data_persub->nama_goal;
        $indi=$data_persub->indikator;
        $id_goal=$data_persub->fk_id_goal;
        $subdata=$data_persub->id_m_subindikator;
        // $tahun=2017;
        $pencapaian= DB::table('t_pencapaian')
        ->join('t_trends','fk_id_trend','=','t_trends.id_trend')
        ->select('t_pencapaian.*', 't_trends.*')
        ->where('t_pencapaian.fk_id_indikator', $id_indi)
        ->where('t_pencapaian.fk_id_m_subindikator', $subdata)
        ->orderBy('t_pencapaian.tahun')
        ->groupBy('t_pencapaian.tahun')
        ->get();
        // DD($pencapaian);
        $pt=0;
        foreach ($pencapaian as $key2 => $value) {
          if($data_persub->isian=='Angka'){
            $nilai[]=(int)$value->nilai;
          }
          elseif ($data_persub->isian=='Teks'){
            $nilai[]=$value->poin+$pt;
            $pt=$value->poin+$pt;
          }
        }
        $dataGrafik[$key]['name'] = $data_persub->subindikator."-". $data_persub->sumberdata;
        $dataGrafik[$key]['data'] = $nilai;
        // DD($nilai);
      }


        //start grafik batang
        $dataGrafik2 = [];
        $pencapaian= DB::table('t_pencapaian')
        ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
        ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
        ->select('t_pencapaian.*','t_m_indikator.id_indikator', 't_m_subindikator.*')
        ->where('t_pencapaian.fk_id_indikator', $id_indi)
        ->groupBy('t_pencapaian.tahun')
        ->orderBy('t_pencapaian.tahun')
        ->orderBy('t_pencapaian.fk_id_m_subindikator')
        ->get();
        // DD($pencapaian);

        foreach ($pencapaian as $key => $data_persubs){
          $nilai=[];
          $tahun=$data_persubs->tahun;
          $id_sub=$data_persubs->fk_id_m_subindikator;
          $pencapaian2= DB::table('t_pencapaian')
          ->join('t_trends','fk_id_trend','=','t_trends.id_trend')
          ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
          ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
          ->select('t_pencapaian.*', 't_trends.*', 't_m_indikator.id_indikator','t_m_subindikator.*')
          ->where('t_pencapaian.fk_id_indikator', $id_indi)
          ->where('t_pencapaian.tahun', $tahun)
          ->orderBy('t_pencapaian.tahun')
          ->orderBy('t_pencapaian.fk_id_m_subindikator')
          ->get();
          // DD($pencapaian2);
        foreach ($pencapaian2 as $key2 => $value) {
          $pt=0;
          if($value->isian=='Angka'){
            $nilai[]=(int)$value->nilai;
          }
          else {
            $nilai[]=$value->poin+$pt;
            $pt=$value->poin+$pt;
          }
          $data1[]=$data_persubs->tahun;
          $data2[]=$value->nilai;
        }
          $dataGrafik2[$key]['name'] = "Tahun ".$data_persubs->tahun;
          $dataGrafik2[$key]['data'] = $nilai;
        }
          dd($dataGrafik2);
          // dd($data1);
        //end grafik batang


      //start grafik pie
      $dataGrafik3 = [];
      $pt=0;
      $tahun_now=date('Y');

      $sub=  DB::table('t_m_subindikator')
      ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
      ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
      ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
      ->select('t_m_subindikator.*','t_goals.nama_goal','t_m_indikator.indikator', 't_m_sumberdata.*')
      ->where('t_m_subindikator.fk_id_indikator', '=', $id_indi)
      ->orderBy('t_m_subindikator.id_m_subindikator')
      ->get();
      // dd($sub);

      foreach ($sub as $key => $data_persub){
        $goal=$data_persub->nama_goal;
        $indi=$data_persub->indikator;
        // $subindi = $data_persub->subindikator." (".$data_persub->sumberdata.")";
        $id_goal=$data_persub->fk_id_goal;
        $subdata=$data_persub->id_m_subindikator;
        // $tahun=date('Y');
        $tahun=2019;
        // start grafik garis
        $pencapaian= DB::table('t_pencapaian')
        ->join('t_trends','fk_id_trend','=','t_trends.id_trend')
        ->select('t_pencapaian.*', 't_trends.*')
        ->where('t_pencapaian.tahun', $tahun)
        ->where('t_pencapaian.fk_id_m_subindikator', $subdata)
        ->orderBy('t_pencapaian.fk_id_m_subindikator')
        ->get();
        // DD($pencapaian);
        foreach ($pencapaian as $key2 => $value) {
          if($data_persub->isian=='Angka'){
            $nilai=(int)$value->nilai;
          }
          else {
            $nilai=$value->poin+$pt;
            $pt=$value->poin+$pt;
          }
        }
        $dataGrafik3[$key]['name'] = $data_persub->subindikator."-". $data_persub->sumberdata;
        $dataGrafik3[$key]['y'] = $nilai;
      }
      // dd($dataGrafik3);
      //end grafik pie


      // dd($dataGrafik);
     return view('frontend.detail_grafik_indi',
            compact('id_goal','goal','indi','dataGrafik', 'subindi', 'dataGrafik2', 'dataGrafik3', 'tahun_now'));
    }


    public function detailGoal(Request $req, $id){
      $no=1;
      $tahun=2017;
      $tahun_now=date('Y');
      $indikator='';
      $subindi='';
      $kurang=$tahun_now-$tahun;
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
            $tahun=2017;
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
                                                  'viewdata_capai' => $viewdata_capai,
                                                   'goal_detail'=> $goal_detail,
                                                   'goalTbl' => $goalTbl,
                                                   'id'=>  $id,
                                                   'no' => $no,
                                                   'tahun' => $tahun,
                                                   'tahun_now' => $tahun_now,
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
                // ->orWhere('tahun' , '=', $tahun)
                // ->where('tahun','=', $tahun_capai)
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
          // dd($data);

          // Untuk select di goal detail
          $thn_didb= DB::table('t_pencapaian')
              ->select('t_pencapaian.tahun')
              ->groupBy('tahun')
              ->orderBy('tahun')
              ->get();
          // DD($thn_skr);


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
            'indikator',
            'tahun_now',

            'no',
            // 'sub',
            'goal_detail','dcapai'));
      }

    }

}
