<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Response;
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
    // $goals=DB :: table('t_goals')->pluck('nama_goal','id_goal');
    $goals=Goals_model::all();
    $master=Indikator_model::all();
    // $sub=SubIndikator_model::all();
    $sub=DB::table('t_m_subindikator')
      ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
      ->select('t_m_subindikator.*','t_m_sumberdata.*')
      ->get();
    $trends=Trend_model::all();

    return view('admin/pencapaian_indikator',
    ['thn_skr'=>$thn_skr,'no'=>$no, 'goals'=>$goals, 'master'=>$master, 'sub'=>$sub, 'trends'=>$trends, 'capai'=> $capai]);
  }

  // public function getIndiList(Request $request)
  // {
  //   $indis=DB :: table("t_m_indikator")
  //         ->where("fk_id_goal", $request->fk_id_goal)
  //         ->pluck("indikator", "id_indikator");
  //         return response()->json($indis);
  // }

  // public function getSubIndiList(Request $request)
  // {
  //   $subs=DB :: table("t_m_subindikator")
  //         ->where("fk_id_indikator", $request->fk_id_indikator)
  //         ->pluck("subindikator", "id_m_subindikator");
  //         return response()->json($subs);
  // }
  public function getIndi($param)
  {
    //GET THE ACCOUNT BASED ON TYPE
    $indis=Indikator_model::where('fk_id_goal', '=', $param)->get();

     //CREATE AN ARRAY 

     $options = array();      

     foreach ($indis as $arrayForEach) {

               $options += array($arrayForEach->id_indikator => $arrayForEach->indikator);                

           }

     

     return Response::json($options);

  }

  public function getSubIndi($param)
  {
        //GET THE ACCOUNT BASED ON TYPE

        $subs =  SubIndikator_model::where('fk_id_indikator','=',$param)->get();

        //CREATE AN ARRAY 

        $options = array();      

        foreach ($subs as $arrayForEach) {

                  $options += array($arrayForEach->id_m_subindikator => $arrayForEach->subindikator);                

              }

        

        return Response::json($options);
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
    // $pencapaian_id=Pencapaian_model::all();
    // $pencapaian=Pencapaian_model::findOrFail($id_pencapaian);
    // $thn_skr = date('Y');

    // $fk_goal=Goals_model::all();
    // $fk_trend=Trend_model::all();
    // $fk_master=Indikator_model::all();
    // $fk_sub=SubIndikator_model::all();
    // $fk_editgoals=Goals_model::findOrFail($pencapaian->fk_id_goal);
    // $fk_edittrends=Trend_model::findOrFail($pencapaian->fk_id_trend);
    // $fk_editmaster=Indikator_model::findOrFail($pencapaian->fk_id_indikator);
    // $fk_editsub=SubIndikator_model::findOrFail($pencapaian->fk_id_m_subindikator);

    $edit_pencapaian= Pencapaian_model::findOrFail($id_pencapaian);
    $thn_skr = date('Y');
  
    $fk_id_goals= Goals_model::pluck('nama_goal', 'id_goal');
    $fk_id_trends= Trend_model::pluck('keterangan', 'id_trend');
    $fk_id_indikators= Indikator_model::pluck ('indikator', 'id_indikator');//inisupaya atribut di model ini tidak muncul semua
    $fk_id_m_subindikators= Subindikator_model::pluck('subindikator', 'id_m_subindikator');
    $edit_fk_id_goals=Goals_model::findOrFail($edit_pencapaian->fk_id_goal);
    $edit_fk_id_trends=Trend_model::findOrFail($edit_pencapaian->fk_id_trend);
    $edit_fk_id_indikators=Indikator_model::findOrFail($edit_pencapaian->fk_id_indikator);
    $edit_fk_id_m_subindikators=SubIndikator_model::findOrFail($edit_pencapaian->fk_id_m_subindikator);



    return view('admin.pencapaian_indikator_edit',
        compact('thn_skr','edit_pencapaian','fk_id_goals',
                'fk_id_trends','fk_id_indikators',
                'fk_id_m_subindikators','edit_fk_id_goals',
                'edit_fk_id_trends','edit_fk_id_indikators',
                'edit_fk_id_m_subindikators'));
  }

  public function update(Request $request, $id_pencapaian)
  {
    Pencapaian_model::find($id_pencapaian)->update([
      'fk_id_goal'=>$request->get('goal'),
      'fk_id_indikator'=>$request->get('indikator'),
      'fk_id_m_subindikator'=>$request->get('sub'),
      'fk_id_trend'=>$request->get('trend'),
      'tahun'=>$request->get('tahun'),
      'nilai'=>$request->get('nilai'),
      'keterangan'=>$request->get('keterangan')
      // 'berkas'=>$request->get('indikator'),

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
