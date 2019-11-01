<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Indikator_model;
use App\SubIndikator_model;
use App\Sumberdata_model;
use App\Goals_model;
use PDF;

class formPengajuanController extends Controller
{
  public function index()
  {
    $no=1;
    $sumberdata=DB::table('t_m_sumberdata')
                ->orderBy('sumberdata','asc')
                ->get();
    return view('admin.form_pengajuan', compact('no','sumberdata'));
  }

  public function downloadPDF($id_m_sumberdata){
    $no=1;
    $goal=null; $indikator=null; $subindi='';
    $kolom=3;
    $sumberdata=Sumberdata_model::find($id_m_sumberdata);
    $join=DB::table('t_m_subindikator')
      ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
      ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
      ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
      ->select('t_goals.*','t_m_indikator.*','t_m_subindikator.*','t_m_sumberdata.*')
      ->where('fk_id_m_sumberdata', $id_m_sumberdata)
      ->orderby('t_m_subindikator.fk_id_goal','asc')
      ->get();
      // DD($join);
      $count=DB::table('t_m_subindikator')
        ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
        ->select('t_m_subindikator.*','t_m_sumberdata.*')
        ->where('fk_id_goal', $goal)
        ->count();
        // DD($sumberdata);

      $count2=DB::table('t_m_subindikator')
        ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
        ->select('t_m_subindikator.*','t_m_sumberdata.*')
        ->where('fk_id_indikator','=',$indikator)
        ->count();

    $pdf = PDF::loadView('layout.pdf',
                compact('join','sumberdata','no',
                        'goal','indikator','subindi',
                        'kolom','id_m_sumberdata',
                      'count','count2'));
    return $pdf->stream();
  }
}
