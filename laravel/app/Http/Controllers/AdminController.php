<?php

namespace App\Http\Controllers;

use App\Goals_model;//tambahan
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//n

class AdminController extends Controller
{
    public function index()
    {
      $goals= Goals_model::all();
      return view('admin.index', compact('goals'));
    }

    public function detailGoal($id){
      $no=1;
      $tahun=2017;
      $null='-';
      // $data=DB::table('t_pencapaian')
      //   ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
      //   ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
      //   ->join('t_m_subindikator','fk_id_m_subindikator','=','t_m_subindikator.id_m_subindikator')
      //   ->join('t_trends','fk_id_trend','=','t_trends.id_trend')
      //   ->select('t_pencapaian.*','t_goals.*','t_m_indikator.*','t_m_subindikator.*','t_trends.keterangan as keterangan_trend')
      //   ->where('id_goal', '=', $id)
      //   ->where('tahun','=', $tahun)
      //   ->get();
      $indikator=DB::table('t_m_indikator')
        ->select('t_m_indikator.*')
        ->where('fk_id_goal',$id)
        ->get();
        // DD($indikator);
      $sub=DB::table('t_m_subindikator')
        ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
        ->select('t_m_subindikator.*','t_m_sumberdata.*')
        ->get();
      // DD($sub);

      //$products=Products_model::findOrFail($id);
      $goal_detail= DB::table('t_goals')->where('id_goal', $id)->get();//sintaks ini bakalan gak kefound karena pake DB::table jadinya tambahin use ya di atas
      return view('admin.goal_detail',
        compact('id','null','tahun','indikator','no','sub','goal_detail'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
