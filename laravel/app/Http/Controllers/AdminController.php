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
        //$products=Products_model::findOrFail($id);
        $goal_detail= DB::table('t_goals')->where('id_goal', $id)->get();//sintaks ini bakalan gak kefound karena pake DB::table jadinya tambahin use ya di atas
        return view('admin.goal_detail', compact('goal_detail'));
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
