<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indikator_model;
use App\SubIndikator_model;
use App\Sumberdata_model;
use App\Goals_model;
use Illuminate\Support\Facades\DB;//n
use RealRashid\SweetAlert\Facades\Alert;



class sdgsSubIndikatorController extends Controller
{
    public function index()
    {
        $no=1;
        $join= DB::table('t_m_subindikator')
              ->join('t_goals','fk_id_goal','=','t_goals.id_goal')
              ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
              ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
              ->select('t_goals.*','t_m_indikator.*','t_m_subindikator.*','t_m_sumberdata.*')
              ->orderBy('t_m_subindikator.id_m_subindikator','Desc')
              ->get();
        $fk_id_indikators=Indikator_model::pluck ('indikator', 'id_indikator');//inisupaya atribut di model ini tidak muncul semua
        $fk_sumberdatas=Sumberdata_model::pluck('sumberdata', 'id_m_sumberdata');
        $datas=SubIndikator_model::get();
        $goals=Goals_model::all();
// dd($join);
        return view('admin.master_sub_indikator', compact('no', 'fk_id_indikators', 'fk_sumberdatas', 'datas','join', 'goals'));
    }

    // public function create()
    // {
    //     // $fk_id_indikators= Indikator_model::pluck ('indikator', 'id_indikator');
    //     // $fk_sumberdatas=Sumberdata_model::pluck('sumberdata', 'id_m_sumberdata');
    //     // return view('admin.master_sub_indikator', compact('fk_id_indikators', 'fk_sumberdatas'));
    //     return view('admin.master_sub_indikator');
    // }

    protected function create()
    {

        return view('admin.master_sub_indikator');
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute harus diisi.',
            'min' => ':attribute harus diisi minimal :min',
            'max' => ':attribute harus diisi maksimal :max ',
          ];

          $this->validate($request,[
            'fk_id_goal' => 'required',
            'fk_id_indikator' => 'required',
            'subindikator' => 'required',
            'fk_id_m_sumberdata'=> 'required',
            'isian' => 'required'

        ],$messages);

        SubIndikator_model::create([
          'fk_id_goal' => $request->get('fk_id_goal'),
          'fk_id_indikator' => $request->get('fk_id_indikator'),
        'subindikator' => $request->get('subindikator'),
        'fk_id_m_sumberdata' => $request->get('fk_id_m_sumberdata'),
          'waktu_pengambilan' => implode(",", $request->get('waktu_pengambilan')),
          'isian' =>  implode(",", $request->get('isian')),
      ]);
        return redirect()->route('master_sub_indikator.index')->withSuccessMessage('Data telah disimpan!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id_m_subindikator)
    {
        $edit_subindikators=SubIndikator_model::findOrFail($id_m_subindikator);
        // $fk_id_indikators= Indikator_model::pluck ('indikator', 'id_indikator');//inisupaya atribut di model ini tidak muncul semua
        $fk_id_indikators= Indikator_model::where('fk_id_goal', $edit_subindikators->fk_id_goal)->get();
        $fk_sumberdatas=Sumberdata_model::pluck('sumberdata', 'id_m_sumberdata');
        $fk_id_goal= Goals_model::all();
        $fk_id_goals= Goals_model::pluck('nama_goal', 'id_goal');
        $edit_fk_indikators=Indikator_model::findOrFail($edit_subindikators->fk_id_indikator);
        $edit_fk_sumberdatas=Sumberdata_model::findOrFail($edit_subindikators->fk_id_m_sumberdata);
        $edit_fk_id_goals=Goals_model::findOrFail($edit_subindikators->fk_id_goal);


        $sumberdatas=Sumberdata_model::all();
        $indikators=Indikator_model::all();

        $getId= $id_m_subindikator;
        $finds = SubIndikator_model::where('id_m_subindikator', $id_m_subindikator)->first();
        $waktu_pengambilan= explode(", ", $finds->waktu_pengambilan);
        $isian= explode(", ", $finds->isian);
        // dd($isian);
        return view('admin.master_sub_indikator_edit',
                    compact ('edit_subindikators',
                            'fk_id_indikators',
                            'fk_sumberdatas', 'fk_id_goal','fk_id_goals','edit_fk_id_goals',
                            'edit_fk_indikators',
                            'edit_fk_sumberdatas',
                            'waktu_pengambilan',
                            'getId','isian'
                            ));


    }

    public function update(Request $request, $id_m_subindikator)
    {
        SubIndikator_model::find($id_m_subindikator)->update([
            'subindikator' => $request->get('subindikator'),
            'waktu_pengambilan'=>  implode(", " , $request->get('waktu_pengambilan')),//ini untuk menjadikan array jadi kata(koma) gitu digabungkan///memisahkan string
             'fk_id_indikator' => $request->get('indikator'),
            'fk_id_m_sumberdata' => $request->get('fk_id_m_sumberdata'),
            'fk_id_goal'=>$request->get('goal'),
            // 'isian'=>  implode(", " , $request->isian),//ini untuk menjadikan array jadi kata(koma) gitu digabungkan///memisahkan string
            'isian'=>  $request->get('isian'),//ini untuk menjadikan array jadi kata(koma) gitu digabungkan///memisahkan string


            ]);

            $edit_waktu_pengambilan=SubIndikator_model::findOrFail($id_m_subindikator);

            // alert()->success('Berhasil.','Data telah diubah!');

            return redirect()->route('master_sub_indikator.index')->withSuccessMessage('Data telah diubah!');

    }

    public function destroy($id_m_subindikator)
    {
        SubIndikator_model::find($id_m_subindikator)->delete();

        alert()->success('Berhasil.','Data telah dihapus!');

        return redirect()->route('master_sub_indikator.index')->withSuccessMessage('Data telah dihapus!');
    }
}
