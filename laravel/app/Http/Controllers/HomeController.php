<?php

namespace App\Http\Controllers;


use App\Goals_model;//tambahan
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;//n

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        // ga butuh login untuk HOme controller
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $goals= Goals_model::all();
        return view('frontend.home', compact('goals'));
    }


    public function detailGoal($id){
        //$products=Products_model::findOrFail($id);
        $goals= DB::table('t_goals')->where('id_goal', $id)->get();//sintaks ini bakalan gak kefound karena pake DB::table jadinya tambahin use ya di atas
        return view('frontend.goal_detail', compact('goals'));
    }
}
