<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indikator_model;
use App\Goals_model;
use RealRashid\SweetAlert\Facades\Alert;

class sdgsIndiMasterController extends Controller
{
  public function create()
  {
    return view('admin.master_indikator');
  }

  public function index()
  {
    $no=1;
    $goals=Goals_model::all();
    $master_indikator=Indikator_model::all()->sortByDesc('id_indikator');

    // if(session ('success_message') ){
    //   Alert::success('Berhasil!', session('success_message'));
    // }di controller.php
    return view('admin.master_indikator',['no'=>$no, 'master_indikator'=>$master_indikator, 'goals'=>$goals]);
  }

  public function store(Request $request)
  {
    $id_goal=$request->goal;
    $indikator=$request->indikator;

    $master=new \App\Indikator_model;
    $master->fk_id_goal=$id_goal;
    $master->indikator=$indikator;
    $master->save();
        // alert()->success('Berhasil.','Data telah disimpan!');
        return redirect('/admin/master_indikator')->withSuccessMessage('Data telah disimpan!');

  }

  public function edit($id_indikator)
  {
    $master_indikator= Indikator_model::findOrFail($id_indikator);
    // $goals=Goals_model::all();
    $fk_id_goals= Goals_model::pluck('nama_goal', 'id_goal');
    $edit_id_goal=Goals_model::findOrFail($master_indikator->fk_id_goal);
    return view('admin.master_indikator_edit',
           compact('master_indikator','fk_id_goals','edit_id_goal'));
  }

  public function update(Request $request, $id_indikator)
  {
    // $master= \App\Indikator_model::find($id_indikator);
    // $master->fk_id_goal=$request->get('goal');
    // $master->indikator=$request->get('indikator');
    // $master->save();
    Indikator_model::find($id_indikator)->update([
      'fk_id_goal'=>$request->get('fk_id_goal'),
      'indikator'=>$request->get('indikator'),


    ]);
    // alert()->success('Berhasil.','Data telah diubah!');
    return redirect()->route('master_indikator.index')->withSuccessMessage('Data telah diubah!');

  }


  public function show($id)
  {
      //
  }


  public function destroy($id_indikator)
  {
    $master= \App\Indikator_model::where('id_indikator',$id_indikator);
    $master->delete();
    // alert()->success('Berhasil.','Data telah dihapus!');
    return redirect('/admin/master_indikator')->withSuccessMessage('Data telah dihapus!');
  }
}
