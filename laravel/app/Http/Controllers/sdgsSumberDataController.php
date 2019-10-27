<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sumberdata_model;
use RealRashid\SweetAlert\Facades\Alert;

class sdgsSumberDataController extends Controller
{
  public function create()
  {
    return view('admin.sumber_data');
  }

  public function index()
  {
    $no=1;
    $sumber=Sumberdata_model::all();
    return view('admin.sumber_data',['no'=>$no, 'sumber'=>$sumber]);
  }

  public function store(Request $request)
  {
    $sumberdata=$request->sumberdata;

    $sumber=new \App\Sumberdata_model;
    $sumber->sumberdata=$sumberdata;
    $sumber->save();
    return redirect('/admin/sumber_data')->withSuccessMessage('Data telah disimpan!');
  }

  public function edit($id_m_sumberdata)
  {
    $sumber= \App\Sumberdata_model::findOrFail($id_m_sumberdata);
    return view('admin.sumber_data_edit',compact('sumber'));
  }

  public function update(Request $request, $id_m_sumberdata)
  {
    Sumberdata_model::find($id_m_sumberdata)->update([
      'id_m_sumberdata'=>$request->get('id_m_sumberdata'),
      'sumberdata'=>$request->get('sumberdata'),
    ]);
    return redirect()->route('sumber_data.index')->withSuccessMessage('Data telah diubah!');
  }

  public function destroy($id_m_sumberdata)
  {
    $sumber= \App\Sumberdata_model::where('id_m_sumberdata',$id_m_sumberdata);
    $sumber->delete();
    return redirect('/admin/sumber_data')->withSuccessMessage('Data telah dihapus!');
  }

}
