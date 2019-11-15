<?php

namespace App\Http\Controllers;

use App\Goals_model;//tambahan
use App\Indikator_model;
use App\Pencapaian_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;


class AdminController extends Controller
{
    public function index()
    {
      $goals= Goals_model::all();
      return view('admin.index', compact('goals'));
    }

    public function  linkGrafikIndi($id_indi)
    {


      // $pencapaian= DB::table('t_pencapaian')
      // ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
      // ->select('t_pencapaian.fk_id_m_subindikator', 't_pencapaian.nilai','t_pencapaian.tahun','t_m_subindikator.subindikator', 't_m_subindikator.id_m_subindikator', 't_m_subindikator.fk_id_indikator')
      // ->where('t_pencapaian.fk_id_indikator', '=', $id_indi)
      // // ->where('t_pencapaian.fk_id_m_subindikator', '=', 't_m_subindikator.id_m_subindikator')
      // ->orderBy('t_pencapaian.fk_id_m_subindikator')
      // ->get();
        // DD($pencapaian);

      $sub=  DB::table('t_m_subindikator')
      ->select('t_m_subindikator.*')
      ->where('t_m_subindikator.fk_id_indikator', '=', $id_indi)
      ->orderBy('t_m_subindikator.id_m_subindikator')
      ->get();
      // dd($sub);

      // $categories=[];
      $data =[];
      $name=[];
      $subindi='';

      // kakak niki
      // $dataGrafik = [];
      // foreach ($sub as $key => $data_persub){
      //   $dataGrafik[$key]['name'] = $data_persub->subindikator;
      //   $dataGrafik[$key]['data'] = [rand(1,100),rand(1,100),rand(1,100)];
      // }
      // dd($dataGrafik);

      //accu nih

      $nilai=[];
      $dataGrafik = [];
      foreach ($sub as $key => $data_persub){
        $subdata=$data_persub->subindikator;
        $dataGrafik[$key]['name'] = $subdata;
        $pencapaian= DB::table('t_pencapaian')
        ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
        ->select('t_pencapaian.fk_id_m_subindikator', 't_pencapaian.nilai','t_pencapaian.tahun','t_m_subindikator.subindikator', 't_m_subindikator.id_m_subindikator', 't_m_subindikator.fk_id_indikator')
        ->where('t_pencapaian.fk_id_indikator', '=', $id_indi)
        ->where('t_pencapaian.fk_id_m_subindikator', '=', $subdata)
        ->orderBy('t_pencapaian.fk_id_m_subindikator')
        ->get();
        DD($pencapaian);
        foreach ($pencapaian as $key => $value) {
            $nilai[]=(int)$value->nilai;
        // DD($data_persub->subindikator);
        }
        $dataGrafik[$key]['data'] = $nilai;
        // DD($nilai);
      }
      // dd($dataGrafik);

      // $nilai=[];
      // $dataGrafik = [];
      // $subindi=0;
      // foreach ($pencapaian as $key => $value) {
      //   if ($value->fk_id_m_subindikator == $value->id_m_subindikator) {
      //     $nilai[]=(int)$value->nilai;
      //     // DD($subindi);
      //     // DD($value->fk_id_m_subindikator);
      //   }
      //   // DD($subindi);
      //   foreach ($sub as $key => $data_persub){
      //     $subindi=$data_persub->id_m_subindikator;
      //     $dataGrafik[$key]['name'] = $data_persub->subindikator;
      //     $dataGrafik[$key]['data'] = $nilai;
      //
      //     // DD($subindi);
      //
      //     // DD($data_persub->subindikator);
      //   }
      //
      // }
      // DD($nilai);

      // dd(Response::json($categories));
      // $d=Response::json($categories);

    //   foreach ($tahun as $data_persub){
    //   $name[]= $data_persub->tahun;
    //   $nilai[]=$data_persub->nilai;
    //   }
   // return json_encode($dataGrafik);

     return view('admin.detail_grafik_indi', compact(
                              'dataGrafik', 'name', 'data'));
    }


    public function detailGoal($id){
      $no=1;
      $tahun=2017;
      $tahun_now=date('Y');
      $indikator='';
      $subindi='';
      $kolomtahun=$tahun_now-$tahun+2;
      // dd($kolomtahun);
      $kolomindi=$kolomtahun+5;
      $data=DB::table('t_m_subindikator')
        ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
        ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
        ->where('t_m_subindikator.fk_id_goal', $id)
        // ->where('t_m_subindikator.fk_id_indikator','=','t_m_indikator.id_indikator')
        ->get();
        // DD($data);

        $data_capai=DB::table('t_pencapaian')
          ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
          ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
          ->join('t_trends','fk_id_trend','=','t_trends.id_trend')
          ->select('t_pencapaian.*','t_goals.*','t_m_subindikator.*','t_trends.keterangan as keterangan_trend','t_trends.simbol_trend')
          ->where('t_pencapaian.fk_id_goal', '=', $id)
          // ->where('tahun','=', $tahun_capai)
          ->orderBy('t_pencapaian.tahun')
          ->get();
          // DD($data_capai);



      $goal_detail= DB::table('t_goals')->where('id_goal', $id)->get();
      return view('admin.goal_detail',
        compact('id',
          'kolomindi',
          'kolomtahun',
          'subindi',
          'data',
          // 'null',
          'tahun',
          'indikator',
          'tahun_now',
          'data_capai',
          'no',
          // 'sub',
          'goal_detail'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
