<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goals_model;
use App\Indikator_model;
use App\SubIndikator_model;
use App\Sumberdata_model;
use App\Trend_model;
use App\Pencapaian_model;

class sdgsCapaianIndiController extends Controller
{
  public function create()
  {
    return view('admin.pencapaian_indikator');
  }

  public function index()
  {
    $no=1;
    $capai=Pencapaian_model::all();
    $goals=Goals_model::all();
    $master=Indikator_model::all();
    $sub=SubIndikator_model::all();
    $trends=Trend_model::all();

    return view('admin.pencapaian_indikator',
    ['no'=>$no, 'goals'=>$goals, 'master'=>$master, 'sub'=>$sub, 'trends'=>$trends, 'capai'=> $capai]);
  }

  public function store(Request $request)
  {
    $tahun=$tahun->tahun;
    $id_goal=$request->goal;
    $id_indikator=$request->indikator;
    $id_sub=
    $id_trend=
    $nilai=
    $keterangan=
    $berkas=



    $pencapaian=new \App\Indikator_model;
    $pencapaian->fk_id_goal=$id_goal;
    $pencapaian->indikator=$indikator;
    $pencapaian->save();
    return redirect('/admin/pencapaian_indikator');
  }

  public function edit($id_pencapaian)
  {
    $pencapaian_indikator= \App\Indikator_model::findOrFail($id_pencapaian);
    $goals=Goals_model::all();
    return view('admin.pencapaian_indikator_edit',compact('pencapaian_indikator','id_pencapaian','goals'));
  }

  public function update(Request $request, $id_pencapaian)
  {
    Indikator_model::find($id_pencapaian)->update([
      'fk_id_goal'=>$request->get('goal'),
      'indikator'=>$request->get('indikator'),
    ]);
    return redirect()->route('pencapaian_indikator.index')
      ->with('success','Data telah diubah');
  }

  public function destroy($id_pencapaian)
  {
    $pencapaian= \App\Indikator_model::where('id_pencapaian',$id_pencapaian);
    $pencapaian->delete();
    return redirect('/admin/pencapaian_indikator')->with('success','Data telah dihapus');
  }
  }
