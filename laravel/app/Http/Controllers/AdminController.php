<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Goals_model;
use App\Indikator_model;
use App\SubIndikator_model;
use App\Pencapaian_model;
use Response;


class AdminController extends Controller
{
    public function index()
    {
      $goals= Goals_model::all();
      return view('admin.index', compact('goals'));
    }

    // public function navbar($id_goal)
    // {
    //   $goals= Goals_model::all();
    //   return view('layout.master_admin', compact('goals'));
    // }

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

      // $data = [];
      // $name = [];
      // $data_pencapaian= [];
      // $nilai= [];
      // $dataGrafik = [];
      // foreach ($sub as $key => $data_persub){
      //   $dataGrafik[$key]['name'] = $data_persub->subindikator;
      //   // $dataGrafik[$key]['data'] = [rand(1,100),rand(1,100),rand(1,100),rand(1,100)];
      //   $data_pencapaian=Pencapaian_model::where('fk_id_indikator', '=', $id_indi)->get();
      //   foreach ($data_pencapaian as $index => $value){
      //         if($data_persub->id_m_subindikator == $value->fk_id_m_subindikator){
      //          $nilai=array_merge($nilai, [(int) $value->nilai]);
      //         }
      //         //$nilai = [rand(0,99), rand(0,99)];
      //   $dataGrafik[$key]['data']= $nilai;
      //   }

      // }


      // kakak niki
      // $dataGrafik = [];
      // foreach ($sub as $key => $data_persub){
      //   $dataGrafik[$key]['name'] = $data_persub->subindikator;
      //   $dataGrafik[$key]['data'] = $nilai;
      //   foreach ($subindi as $key => $value){

      //     if($data_persub->id_m_subindikator == $value->fk_id_m_subindikator){
      //       $nilai[]=(int)$value->nilai;
      //     }
      //   }

      //accu nih
      $dataGrafik = [];
      $pt=0;
      foreach ($sub as $key => $data_persub){
        $nilai=[];
        $goal=$data_persub->nama_goal;
        $indi=$data_persub->indikator;
        $id_goal=$data_persub->fk_id_goal;
        $subdata=$data_persub->id_m_subindikator;
        $tahun=2017;
        $pencapaian= DB::table('t_pencapaian')
        ->join('t_trends','fk_id_trend','=','t_trends.id_trend')
        ->select('t_pencapaian.*', 't_trends.*')
        ->where('t_pencapaian.fk_id_indikator', $id_indi)
        ->where('t_pencapaian.fk_id_m_subindikator', $subdata)
        ->orderBy('t_pencapaian.fk_id_m_subindikator')
        ->get();
        // DD($pencapaian);
        foreach ($pencapaian as $key2 => $value) {
          if($data_persub->isian=='Angka'){
            $nilai[]=(int)$value->nilai;
          }
          else {
            $nilai[]=$value->poin+$pt;
            $pt=$value->poin+$pt;
          }


        }
        $dataGrafik[$key]['name'] = $data_persub->subindikator."-". $data_persub->sumberdata;
        $dataGrafik[$key]['data'] = $nilai;
        // DD($nilai);
      }
      // dd($dataGrafik);
     return view('admin.detail_grafik_indi',
            compact('id_goal','goal','indi','dataGrafik'));
    }


    public function detailGoal($id){
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
      $data=DB::table('t_m_subindikator')
        ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
        ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
        ->where('t_m_subindikator.fk_id_goal', $id)
        // ->where('t_m_subindikator.fk_id_indikator','=','t_m_indikator.id_indikator')
        ->orderBy('t_m_subindikator.id_m_subindikator')
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
          ->orderBy('t_m_subindikator.id_m_subindikator')
          ->get();
          // DD($data_capai);

      $goal_detail= DB::table('t_goals')->where('id_goal', $id)->get();
      return view('admin.goal_detail',
        compact('id',
          'kolomindi',
          'kolomtahun',
          'subindi',
          'data',
          // 'dataindi',
          // 'null',
          'tahun',
          'indikator',
          'tahun_now',
          'data_capai',
          'no',
          // 'sub',
          'goal_detail'));
    }
}
