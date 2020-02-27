<?php

namespace App\Http\Controllers;

use App\Pencapaian_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//n
use PDF;


class pdfGoalDetailController extends Controller
{
   
    public function index(){
        $capai= Pencapaian_model::all();
        return view('layout.pdfDetailGoal', compact('capai'));
    }


    
    public function detailGoalPdf($id){
        $no=1;
        // $id='';
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
          ->get();
          DD($data);
  
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
  
        $pdf = PDF::loadView('layout.pdfDetailGoal',
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
            'no','goal_detail'
            // 'sub',
           ));
            return $pdf->stream();
    // return $pdf->download('laporan-goal-pdf');
  
      }
}
