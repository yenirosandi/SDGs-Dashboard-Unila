<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indikator_model;
use App\SubIndikator_model;
use App\Sumberdata_model;
use Illuminate\Support\Facades\DB;//n
use RealRashid\SweetAlert\Facades\Alert;



class sdgsSubIndikatorController extends Controller
{
    public function index()
    {
        $no=1;
        $join=DB::table('t_m_subindikator')
          ->join('t_m_indikator','fk_id_indikator','=','t_m_indikator.id_indikator')
          ->join('t_m_sumberdata','fk_id_m_sumberdata','=','t_m_sumberdata.id_m_sumberdata')
          ->select('t_m_indikator.*','t_m_subindikator.*','t_m_sumberdata.*')
          ->get();
        $fk_id_indikators=Indikator_model::pluck ('indikator', 'id_indikator');//inisupaya atribut di model ini tidak muncul semua
        $fk_sumberdatas=Sumberdata_model::pluck('sumberdata', 'id_m_sumberdata');
        $datas=SubIndikator_model::get();
        return view('admin.master_sub_indikator', compact('no', 'fk_id_indikators', 'fk_sumberdatas', 'datas','join'));
    }

    public function create()
    {
        $fk_id_indikators= Indikator_model::pluck ('indikator', 'id_indikator');//inisupaya atribut di model ini tidak muncul semua
        $fk_sumberdatas=Sumberdata_model::pluck('sumberdata', 'id_m_sumberdata');
        return view('admin.master_sub_indikator', compact('fk_id_indikators', 'fk_sumberdatas'));

    }

    public function store(Request $request)
    {
        $check = new SubIndikator_model;
        $check->subindikator = $request->subindikator;
        $check->waktu_pengambilan = implode(", ",$request->waktu_pengambilan);
        $check->fk_id_goal = $request->fk_id_goal;
        $check->fk_id_indikator = $request->fk_id_indikator;
        $check->fk_id_m_sumberdata = $request->fk_id_m_sumberdata;
        $check->fk_id_goal = $request->fk_id_goal;
        $check->save();
        // alert()->success('Berhasil.','Data telah ditambahkan!');

        return redirect()->route('master_sub_indikator.index')->withSuccessMessage('Data telah disimpan!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id_m_subindikator)
    {
        $edit_subindikators=SubIndikator_model::findOrFail($id_m_subindikator);
        $fk_id_indikators= Indikator_model::pluck ('indikator', 'id_indikator');//inisupaya atribut di model ini tidak muncul semua
        $fk_sumberdatas=Sumberdata_model::pluck('sumberdata', 'id_m_sumberdata');
        $edit_fk_indikators=Indikator_model::findOrFail($edit_subindikators->fk_id_indikator);
        $edit_fk_sumberdatas=Sumberdata_model::findOrFail($edit_subindikators->fk_id_m_sumberdata);

        $sumberdatas=Sumberdata_model::all();
        $indikators=Indikator_model::all();

        $getId= $id_m_subindikator;
        $finds = SubIndikator_model::where('id_m_subindikator', $id_m_subindikator)->first();
        $waktu_pengambilan= explode(", ", $finds->waktu_pengambilan);
        return view('admin.master_sub_indikator_edit',
                    compact ('edit_subindikators',
                            'fk_id_indikators',
                            'fk_sumberdatas',
                            'edit_fk_indikators',
                            'edit_fk_sumberdatas',
                            'waktu_pengambilan',
                            'getId'
                            ));


    }

    public function update(Request $request, $id_m_subindikator)
    {
        SubIndikator_model::find($id_m_subindikator)->update([
            'subindikator' => $request->get('subindikator'),
            'waktu_pengambilan'=>  implode(", " , $request->waktu_pengambilan),//ini untuk menjadikan array jadi kata(koma) gitu digabungkan///memisahkan string
             'fk_id_indikator' => $request->get('fk_id_indikator'),
            'fk_id_m_sumberdata' => $request->get('fk_id_m_sumberdata'),
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
