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
    $subindi='';
    $kolom=3;
    $sumberdata=Sumberdata_model::find($id_m_sumberdata);
    $join=DB::table('t_m_subindikator')
      ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
      ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
      ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
      ->select('t_goals.*','t_m_indikator.*','t_m_subindikator.*','t_m_sumberdata.*')
      ->where('t_m_subindikator.fk_id_m_sumberdata', $id_m_sumberdata)
      ->orderBy('t_m_subindikator.fk_id_goal')
      ->get();
    $countJoin= count($join);
    // DD($countJoin);
    $pdf = PDF::loadView('layout.pdf',
                compact('join','sumberdata','no',
                        'subindi','countJoin',
                        'kolom','id_m_sumberdata'
                      // 'goal','indikator','count','count2'
                    ))->setPaper('a4', 'landscape');
    return $pdf->stream();
  }
}
