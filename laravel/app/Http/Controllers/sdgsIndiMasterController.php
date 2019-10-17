<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indikator_model;
use App\Goals_model;
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
    $master_indikator=Indikator_model::all();
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
    return redirect('/admin/master_indikator');
  }

  public function edit($id_indikator)
  {
    $master_indikator= Indikator_model::findOrFail($id_indikator);
    $goals=Goals_model::all();
    $edit_id_goal=Goals_model::findOrFail($master_indikator->fk_id_goal);
    return view('admin.master_indikator_edit',
           compact('master_indikator','goals','edit_id_goal'));
  }

  public function update(Request $request, $id_indikator)
  {
    // $master= \App\Indikator_model::find($id_indikator);
    // $master->fk_id_goal=$request->get('goal');
    // $master->indikator=$request->get('indikator');
    // $master->save();
    Indikator_model::find($id_indikator)->update([
      'fk_id_goal'=>$request->get('goal'),
      'indikator'=>$request->get('indikator'),


    ]);

    return redirect()->route('master_indikator.index')
      ->with('success','Data telah diubah');
  }


  public function show($id)
  {
      //
  }


  public function destroy($id_indikator)
  {
    $master= \App\Indikator_model::where('id_indikator',$id_indikator);
    $master->delete();
    return redirect('/admin/master_indikator')->with('success','Data telah dihapus');
  }
}
