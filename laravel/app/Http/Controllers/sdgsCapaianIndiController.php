<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goals_model;
use App\Pencapaian_model;
use App\Indikator_model;
use App\SubIndikator_model;
use App\Sumberdata_model;
use App\Trend_model;
use Illuminate\Support\Facades\DB;//n

class sdgsCapaianIndiController extends Controller
{
  public function create()
  {
    return view('admin.pencapaian_indikator');
  }

  public function index()
  {
    $no=1;
    $thn_skr = date('Y');

    // $capai=Pencapaian_model::all();
    $capai=DB::table('t_pencapaian')
      ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
      ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
      ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
      ->join('t_trends','fk_id_trend','=','t_trends.id_trend')
      ->select('t_pencapaian.*','t_goals.*','t_m_indikator.*','t_m_subindikator.*','t_trends.keterangan as keterangan_trend')
      ->get();
    $goals=Goals_model::all();
    $master=Indikator_model::all();
    // $sub=SubIndikator_model::all();
    $sub=DB::table('t_m_subindikator')
      ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
      ->select('t_m_subindikator.*','t_m_sumberdata.*')
      ->get();
    $trends=Trend_model::all();

    return view('admin.pencapaian_indikator',
    ['thn_skr'=>$thn_skr,'no'=>$no, 'goals'=>$goals, 'master'=>$master, 'sub'=>$sub, 'trends'=>$trends, 'capai'=> $capai]);
  }

  public function store(Request $request)
  {
    $tahun=$request->tahun;
    $id_goal=$request->goal;
    $id_indikator=$request->indikator;
    $id_sub=$request->sub;
    $id_trend=$request->trend;
    $nilai=$request->nilai;
    $keterangan=$request->keterangan;
    // $berkas=$request->berkas;

    $pencapaian=new \App\Pencapaian_model;
    $pencapaian->tahun=$tahun;
    $pencapaian->fk_id_goal=$id_goal;
    $pencapaian->fk_id_indikator=$id_indikator;
    $pencapaian->fk_id_m_subindikator=$id_sub;
    $pencapaian->fk_id_trend=$id_trend;
    $pencapaian->nilai=$nilai;
    $pencapaian->keterangan=$keterangan;
    // $pencapaian->berkas=$berkas;
    $pencapaian->save();
    return redirect('/admin/pencapaian_indikator');
  }

  public function edit($id_pencapaian)
  {
    $thn_skr = date('Y');
    $pencapaian= \App\Pencapaian_model::findOrFail($id_pencapaian);
    $goals=Goals_model::all();
    $master=Pencapaian_model::all();
    $sub=SubIndikator_model::all();
    $trends=Trend_model::all();
    $data=DB::table('t_pencapaian')
      ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
      ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
      ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
      ->join('t_trends','fk_id_trend','=','t_trends.id_trend')
      ->select('t_pencapaian.*','t_goals.*','t_m_indikator.*','t_m_subindikator.*','t_trends.keterangan as keterangan_trend')
      ->get();
    return view('admin.pencapaian_indikator_edit',
        compact('data','thn_skr','pencapaian','id_pencapaian','goals','master','sub','trends'));
  }

  public function update(Request $request, $id_pencapaian)
  {
    Pencapaian_model::find($id_pencapaian)->update([
      'fk_id_goal'=>$request->get('goal'),
      'fk_id_indikator'=>$request->get('indikator'),
      'fk_id_m_subindikator'=>$request->get('indikator'),
      'fk_id_trend'=>$request->get('indikator'),
      'nilai'=>$request->get('indikator'),
      'keterangan'=>$request->get('indikator'),
      'berkas'=>$request->get('indikator'),

    ]);
    return redirect()->route('pencapaian_indikator.index')
      ->with('success','Data telah diubah');
  }

  public function destroy($id_pencapaian)
  {
    $pencapaian= \App\Pencapaian_model::where('id_pencapaian',$id_pencapaian);
    $pencapaian->delete();
    return redirect('/admin/pencapaian_indikator')->with('success','Data telah dihapus');
  }
  }
