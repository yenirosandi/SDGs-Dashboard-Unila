<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indikator_model;
use App\SubIndikator_model;
use App\Sumberdata_model;

class sdgsSubIndikatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $no=1;
        $fk_id_indikators=Indikator_model::pluck ('indikator', 'id_indikator');//inisupaya atribut di model ini tidak muncul semua
        $fk_sumberdatas=Sumberdata_model::pluck('sumberdata', 'id_m_sumberdata');
        $datas=SubIndikator_model::get();
        return view('admin.master_sub_indikator',['no'=>$no, 'datas'=>$datas,'fk_id_indikators'=>$fk_id_indikators, 'fk_sumberdatas'=>$fk_sumberdatas]);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fk_id_indikators= Indikator_model::pluck ('indikator', 'id_indikator');//inisupaya atribut di model ini tidak muncul semua
        $fk_sumberdatas=Sumberdata_model::pluck('sumberdata', 'id_m_sumberdata');
        return view('admin.master_sub_indikator', compact('fk_id_indikators', 'fk_sumberdatas'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // SubIndikator_model::create([
        //     'subindikator' => $request->get('subindikator'),
        //     'waktu_pengambilan' => $request->get('waktu_pengambilan'),
        //     'fk_id_indikator' => $request->get('fk_id_indikator'),
        //     'fk_id_m_sumberdata' => $request->get('fk_id_m_sumberdata'),
        //     ]);
        $check = new SubIndikator_model;
        $check->subindikator = $request->subindikator;
        $check->waktu_pengambilan = implode(", ",$request->waktu_pengambilan);
        $check->fk_id_indikator = $request->fk_id_indikator;
        $check->fk_id_m_sumberdata = $request->fk_id_m_sumberdata;
        $check->save();

        // alert()->success('Berhasil.','Data telah ditambahkan!');

        return redirect()->route('master_sub_indikator.index')->with('message','Data telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_m_subindikator)
    {
        $edit_subindikators=SubIndikator_model::findOrFail($id_m_subindikator);
        // $edit_fk_sumberdata=Sumberdata_model::all();
        // $edit_fk_indikator=Indikator_model::all();
        $fk_id_indikators= Indikator_model::pluck ('indikator', 'id_indikator');//inisupaya atribut di model ini tidak muncul semua
        $fk_sumberdatas=Sumberdata_model::pluck('sumberdata', 'id_m_sumberdata');
        $edit_fk_indikators=Indikator_model::findOrFail($edit_subindikators->fk_id_indikator);
        $edit_fk_sumberdatas=Sumberdata_model::findOrFail($edit_subindikators->fk_id_m_sumberdata);

        $sumberdatas=Sumberdata_model::all();
        $indikators=Indikator_model::all();

        $getId= $id_m_subindikator;
        $finds = SubIndikator_model::whereId($id_m_subindikator)->first();
        // $finds = SubIndikator_model::where('id_m_subindikator',0)->first();
        $waktu_pengambilan= explode(", ", $finds->waktu_pengambilan);

        return view('admin.master_sub_indikator_edit', compact('getId','waktu_pengambilan','indikators','sumberdatas','id_m_subindikator','edit_subindikators','fk_id_indikators','fk_sumberdatas','edit_fk_indikators', 'edit_fk_sumberdatas'));
        // return view('admin.master_sub_indikator_edit', compact('getId','waktu_pengambilan','subindikators','id_m_subindikator','edit_subindikators','fk_id_indikators','fk_sumberdatas','edit_fk_indikators', 'edit_fk_sumberdatas'));
 
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

            return redirect()->route('master_sub_indikator.index')->with('message','Data telah diubah!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_m_subindikator)
    {
        SubIndikator_model::find($id_m_subindikator)->delete();
        // alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('master_sub_indikator.index')->with('message','Data telah dihapus!');
 
    }
}
