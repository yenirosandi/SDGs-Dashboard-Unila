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

      //accu nih
      $dataGrafik = [];
      $pt=0;
      foreach ($sub as $key => $data_persub){
        $nilai=[];
        $goal=$data_persub->nama_goal;
        $indi=$data_persub->indikator;
        $subindi[] = $data_persub->subindikator." (".$data_persub->sumberdata.")";

        $id_goal=$data_persub->fk_id_goal;
        $subdata=$data_persub->id_m_subindikator;
        $tahun=2017;
        $tahun_now=date("Y");
        // start grafik garis
        $pencapaian= DB::table('t_pencapaian')
        ->join('t_trends','fk_id_trend','=','t_trends.id_trend')
        ->select('t_pencapaian.*', 't_trends.*')
        ->where('t_pencapaian.fk_id_indikator', $id_indi)
        ->where('t_pencapaian.fk_id_m_subindikator', $subdata)
        ->orderBy('t_pencapaian.tahun')
        ->groupBy('t_pencapaian.tahun')
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
      //end grafik gariis

      //start grafik batang
      $dataGrafik2 = [];
      $pt=0;
      $pencapaian= DB::table('t_pencapaian')
      ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
      ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
      ->select('t_pencapaian.*','t_m_indikator.id_indikator', 't_m_subindikator.*')
      ->where('t_pencapaian.fk_id_indikator', $id_indi)
      ->orderBy('t_pencapaian.fk_id_m_subindikator')
      ->orderBy('t_pencapaian.tahun')
      ->groupBy('t_pencapaian.tahun')
      ->get();
      // DD($pencapaian);

      foreach ($pencapaian as $key => $data_persub){
        $nilai=[];
        $tahun=$data_persub->tahun;
        $id_sub=$data_persub->fk_id_m_subindikator;
        $pencapaian2= DB::table('t_pencapaian')
        ->join('t_trends','fk_id_trend','=','t_trends.id_trend')
        ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
        ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
        ->select('t_pencapaian.*', 't_trends.*', 't_m_indikator.id_indikator','t_m_subindikator.*')
        ->where('t_pencapaian.fk_id_indikator', $id_indi)
        ->where('t_pencapaian.tahun', $tahun)
        ->orderBy('t_pencapaian.fk_id_m_subindikator')
        ->orderBy('t_pencapaian.tahun')
        ->get();
        // DD($pencapaian2);

      foreach ($pencapaian2 as $key2 => $value) {
        if($value->isian=='Angka'){
          $nilai[]=(int)$value->nilai;
        }
        else {
          $nilai[]=$value->poin+$pt;
          $pt=$value->poin+$pt;
        }
        $tahun++;
      }
        $dataGrafik2[$key]['name'] = "Tahun ".$data_persub->tahun;
        $dataGrafik2[$key]['data'] = $nilai;
      }
        // dd($dataGrafik2);
      //end grafik batang



     return view('admin.detail_grafik_indi',
            compact('id_goal','goal','indi','dataGrafik','subindi','dataGrafik2'));
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
