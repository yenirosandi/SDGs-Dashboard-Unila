<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indikator_model;
use App\Goals_model;
class sdgsIndiMasterController extends Controller
{
  public function index()
  {
    $goals=Goals_model::all();
    $master_indikator=Indikator_model::all();
    return view('admin.master_indikator',['master_indikator'=>$master_indikator, 'goals'=>$goals]);
  }
  public function store(Request $request)
  {
    $this->validate($request. [
      'goal'=>'required',
      'indikator'=> 'required'
    ]);

    Indikator_model::create([
      'goal' => $request->fk_id_goal,
      'indikator' => $request->indikator
    ]);
    return redirect('/master_indikator');
  }
}
