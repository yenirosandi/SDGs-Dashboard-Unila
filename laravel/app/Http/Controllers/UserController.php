<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.profil');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::findOrFail($id);

        return view('admin.profil', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //  //TAMABHANNEEE
        //  $user_data = User::findOrFail($id);

        //  if($request->file('gambar')) 
        //  {
        //      $file = $request->file('gambar');
        //      $dt = Carbon::now();
        //      $acak  = $file->getClientOriginalExtension();
        //      $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
        //      $request->file('gambar')->move("images/user", $fileName);
        //      $user_data->gambar = $fileName;
        //  }
 
        //  $user_data->name = $request->input('name');
        //  $user_data->email = $request->input('email');
        //  if($request->input('password')) {
        //  $user_data->admin = $request->input('admin');
        //  }
 
        //  if($request->input('password')) {
        //      $user_data->password= bcrypt(($request->input('password')));
         
        //  }
 
        //  $user_data->update();
 
        //  Session::flash('message', 'Berhasil diubah!');
        //  Session::flash('message_type', 'success');
        //  // return redirect()->to('user'); //akan ke-back ke sini
        //  return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
