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
use RealRashid\SweetAlert\Facades\Alert;


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

        // $subs =  SubIndikator_model::where('fk_id_indikator','=',$param)->get();

        $subs=DB::table('t_m_subindikator')
        ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
        ->select('t_m_subindikator.*','t_m_sumberdata.*')
        ->where('fk_id_indikator','=',$param)->get();
        // dd($subs);

        //CREATE AN ARRAY
      //   @foreach($sub as $data_sub)
      //   <option value="{{$data_sub->id_m_subindikator}}"> {{$data_sub->subindikator}} - {{$data_sub->sumberdata}}</option>
      // @endforeach
        $options = array();

        foreach ($subs as $arrayForEach) {

                  $options += array($arrayForEach->id_m_subindikator => $arrayForEach->subindikator . " - " . $arrayForEach->sumberdata);

              }



        return Response::json($options);
  }


  public function getNilaiTahunLalu($param)
  {

    $tahun= DB::table('t_pencapaian')
    ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
    ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
    ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
    ->select('t_pencapaian.*','t_m_subindikator.*')
    ->where('tahun','=',$param)
    ->get();

    return json_encode($tahun);
  }



  public function show($id)
  {
      //
  }

  public function store(Request $request)
  {

    $messages = [
      'required' => ':attribute harus diisi.',
      // 'tahun.required' => 'Tahun data pencapaian harus dipilih',
      // 'fk_id_goal.required' => 'Goal harus dipilih',
      // 'fk_id_indikator.required' => 'Indikator harus dipilih',
      // 'fk_id_m_subindikator.required' => 'Sub Indikator harus dipilih',
      // 'nilai.required' => 'Nilai harus diisi',
      // 'fk_id_trend.required' => 'Trend harus dipilih',
      'min' => ':attribute harus diisi minimal :min',
      'max' => ':attribute harus diisi maksimal :max ',
    ];

  $this->validate($request,[
      'tahun' => 'required',
      'goal' => 'required',
      'indikator' => 'required',
      'sub'=> 'required',
      'nilai' => 'required',
      'trend'=> 'required'

  ],$messages);

  Pencapaian_model::create([
    'tahun' => $request->get('tahun'),
    'fk_id_goal' => $request->get('goal'),
    'fk_id_indikator' => $request->get('indikator'),
    'fk_id_m_subindikator' => $request->get('sub'),
    'fk_id_trend' => $request->get('trend'),
    'nilai' => $request->get('nilai'),
    'keterangan' => $request->get('keterangan'),
]);
    // $tahun=$request->tahun;
    // $id_goal=$request->goal;
    // $id_indikator=$request->indikator;
    // $id_sub=$request->sub;
    // $id_trend=$request->trend;
    // $nilai=$request->nilai;
    // $keterangan=$request->keterangan;
    // // $berkas=$request->berkas;

    // $pencapaian=new \App\Pencapaian_model;
    // $pencapaian->tahun=$tahun;
    // $pencapaian->fk_id_goal=$id_goal;
    // $pencapaian->fk_id_indikator=$id_indikator;
    // $pencapaian->fk_id_m_subindikator=$id_sub;
    // $pencapaian->fk_id_trend=$id_trend;
    // $pencapaian->nilai=$nilai;
    // $pencapaian->keterangan=$keterangan;
    // // $pencapaian->berkas=$berkas;
    // $pencapaian->save();
    return redirect('/admin/pencapaian_indikator')->withSuccessMessage('Data telah disimpan!');
  }

  public function edit($id_pencapaian)
  {
    $edit_pencapaian= Pencapaian_model::findOrFail($id_pencapaian);
    $thn_skr = date('Y');
    $fk_id_goal= Goals_model::all();
    $fk_id_goals= Goals_model::pluck('nama_goal', 'id_goal');
    $fk_id_trends= Trend_model::pluck('keterangan', 'id_trend');
    $fk_id_indikators= Indikator_model::where('fk_id_goal', $edit_pencapaian->fk_id_goal)->get();
    // $fk_id_indikators= Indikator_model::pluck ('indikator', 'id_indikator')->where('fk_id_goal', '=', $edit_pencapaian->fk_id_goal)->get();
    $fk_id_m_subindikators= Subindikator_model::where('fk_id_indikator', $edit_pencapaian->fk_id_indikator)->get();
    $edit_fk_id_goals=Goals_model::findOrFail($edit_pencapaian->fk_id_goal);
    $edit_fk_id_trends=Trend_model::findOrFail($edit_pencapaian->fk_id_trend);
    $edit_fk_id_indikators=Indikator_model::findOrFail($edit_pencapaian->fk_id_indikator);
    $edit_fk_id_m_subindikators=SubIndikator_model::findOrFail($edit_pencapaian->fk_id_m_subindikator);


    // dd ($fk_id_goal);
    // return $edit_pencapaian;
    return view('admin.pencapaian_indikator_edit',
        compact('thn_skr','edit_pencapaian','fk_id_goals',
                'fk_id_trends','fk_id_indikators',
                'fk_id_m_subindikators','edit_fk_id_goals',
                'edit_fk_id_trends','edit_fk_id_indikators',
                'edit_fk_id_m_subindikators', 'fk_id_goal'));
  }


  public function update(Request $request, $id_pencapaian)
  {

      $messages = [
        'required' => ':attribute harus diisi.',
        'min' => ':attribute harus diisi minimal :min',
        'max' => ':attribute harus diisi maksimal :max ',
    ];

    $this->validate($request,[
      'tahun' => 'required',
      'goal' => 'required',
      'indikator' => 'required',
      'sub'=> 'required',
      'nilai' => 'required',
      'trend'=> 'required'
    ],$messages);

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
    return redirect('/admin/pencapaian_indikator')->withSuccessMessage('Data telah diubah!');
  }

  public function destroy($id_pencapaian)
  {
    $pencapaian= \App\Pencapaian_model::where('id_pencapaian',$id_pencapaian);
    $pencapaian->delete();
    return redirect('/admin/pencapaian_indikator')->withSuccessMessage('Data telah dihapus!');
  }

    public function tahun_sebelum(Request $request)
    {
        $tahun      = !empty($request->tahun) ? ($request->tahun) : ('');
        $slgoal     = !empty($request->slgoal) ? ($request->slgoal) : ('');
        $slindi     = !empty($request->slindi) ? ($request->slindi) : ('');
        $slsub      = !empty($request->slsub) ? ($request->slsub) : ('');

        if($tahun && $slgoal && $slindi && $slsub){
            try {
                $year  = date('Y', strtotime('-1 year'));
                $pencapaian = \App\Pencapaian_model::where('tahun', $year)->where('fk_id_goal', $slgoal)->where('fk_id_indikator', $slindi)->where('fk_id_m_subindikator', $slsub)->first();
                return response()->json([ 'nilai' => $pencapaian->nilai ], 200);
            } catch (\Exception $ex){
                return response()->json([ 'nilai' => 'nilai tidak ditemukan' ], 200);
            }
        }

        return response()->json([ 'nilai' => 'Pilihan tidak lengkap' ], 200);

    }
}
