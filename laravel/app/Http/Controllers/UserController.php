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
      $data=User::all();
      return view('admin.profil', compact('data'));
    }

    public function edit($id)
    {
      $data=User::findOrFail($id);
      return view('admin.profil', compact('data'));
    }

    public function update(Request $request, $id)
    {
      User::find($id)->update([
        'nama' =>$request->get('nama'),
        'username' =>$request->get('username'),
        'nip'=>$request->get('nip'),
        'jabatan'=>$request->get('jabatan'),
        'updated_at' => \Carbon\Carbon::now()
      ]);
      return redirect()->route('profil.index')
        ->with('success','Data telah diubah');
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
