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
        $fk_indikator=Indikator_model::all();
        $fk_sumberdata=Sumberdata_model::all();
        return view('admin.master_sub_indikator',['no'=>$no, 'fk_indikator'=>$fk_indikator, 'fk_sumberdata'=>$fk_sumberdata]);
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master_sub_indikator');
        
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

        alert()->success('Berhasil.','Data telah ditambahkan!');

        return redirect()->route('master_sub_indikator.index');
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
        $edit_subindikator=SubIndikator_model::findOrFail($id_m_subindikator);
        $edit_fk_sumberdata=Sumberdata_model::all();
        $edit_fk_indikator=Indikator_model::all();


        $getId= $id_m_subindikator;
        $finds = SubIndikator_model::whereId($id_m_subindikator)->first();
        $waktu_pengambilan= explode(", ", $finds->waktu_pengambilan);



        return view('admin.master_sub_indikator_edit', compact('edit_subindikator','edit_fk_indikator', 'edit_fk_sumberdata', 'getId','waktu_pengambilan'));
 
        
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
           
            alert()->success('Berhasil.','Data telah diubah!');

            return redirect()->route('master_sub_indikator.index');
    
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
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('master_sub_indikator.index');
 
    }
}
