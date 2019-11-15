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


      $subindi= DB::table('t_pencapaian')
      ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
      ->select('t_pencapaian.*','t_m_subindikator.*')
      ->where('t_pencapaian.fk_id_indikator', '=', $id_indi)
      ->get();
        // DD($subindi);

      $tahun= DB::table('t_pencapaian')
      ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
      ->select('t_pencapaian.nilai','t_pencapaian.tahun','t_m_subindikator.subindikator', 't_m_subindikator.fk_id_indikator')
      ->where('t_pencapaian.fk_id_indikator', '=', $id_indi)
      ->groupBy('subindikator', 'tahun')
      ->orderBy('tahun')
      ->get();
// dd($tahun);

      $sub=  DB::table('t_m_subindikator')
      ->select('t_m_subindikator.*')
      ->where('t_m_subindikator.fk_id_indikator', '=', $id_indi)
      ->get();
      // dd($sub);

      // $categories=[];
      $data = [];
      $name = [];
      $data_pencapaian= [];
      $nilai= [];
      $dataGrafik = [];
      foreach ($sub as $key => $data_persub){
        $dataGrafik[$key]['name'] = $data_persub->subindikator;
        // $dataGrafik[$key]['data'] = [rand(1,100),rand(1,100),rand(1,100),rand(1,100)];
        $data_pencapaian=Pencapaian_model::where('fk_id_indikator', '=', $id_indi)->get();
        foreach ($data_pencapaian as $index => $value){
              if($data_persub->id_m_subindikator == $value->fk_id_m_subindikator){
               $nilai=array_merge($nilai, [(int) $value->nilai]);
              }
              //$nilai = [rand(0,99), rand(0,99)];
        $dataGrafik[$key]['data']= $nilai;
        }

      }  
      
      
      // $dataGrafik = [];
      // $nilai= [];
      // foreach ($sub as $key => $data_persub){
      //   $dataGrafik[$key]['name'] = $data_persub->subindikator;
      //   $dataGrafik[$key]['data'] = $nilai;
      //   foreach ($subindi as $key => $value){

      //     if($data_persub->id_m_subindikator == $value->fk_id_m_subindikator){
      //       $nilai[]=(int)$value->nilai;
      //     }
      //   }
      
dd($dataGrafik);
//return json_encode($dataGrafik);

      // dd(Response::json($categories));
      // $d=Response::json($categories);

    //   foreach ($tahun as $data_persub){
    //   $name[]= $data_persub->tahun;
    //   $nilai[]=$data_persub->nilai;
    //   }
   // return json_encode($dataGrafik);

     return view('admin.detail_grafik_indi', compact(
                              'dataGrafik', 'name', 'data', 'data_pencapaian'));
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
          ->orderBy('t_pencapaian.fk_id_m_subindikator')
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
