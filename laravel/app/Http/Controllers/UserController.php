<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

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
      // $data=User::all();
      // return view('admin.profil', compact('data'));
      $user = Auth::user();
      return view('admin.profil', compact('user'));
    }
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('preventBackHistory');
    }

    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('admin.profil_edit', compact('user'));
    }

    // public function edit($id)
    // {
    //   $data=User::findOrFail($id);
    //   return view('admin.profil', compact('data'));
    // }
    // public function update(User $user)
    // { 
    //     $this->validate(request(), [
    //         'nama' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:6|confirmed'
    //     ]);

    //     $user->nama = request('nama');
    //     $user->email = request('email');
    //     // $user->password = bcrypt(request('password'));

    //     $user->save();
    //     return redirect()->route('profil.index');
    // }

//     public function update(User $user, Request $request)
// { 
//     $data = $request->validate([
//         'name' => 'required',
//         'email' => 'required|email|unique:users',
//     ]);

//     $user->fill($data);
//     $user->save();
//     Flash::message('Your account has been updated!');
//     return back();
// }
    public function update( User $user,Request $request)
    {
      $user = Auth::user()->update([
        'nama' =>$request->get('nama'),
        'username' =>$request->get('username'),
        'nip'=>$request->get('nip'),
        'jabatan'=>$request->get('jabatan'),
      ]);
      return redirect()->route('profil.index')->withSuccessMessage('Data telah diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function showChangePasswordForm()
    {
      return view('auth.changepassword');
    }
       
    public function changePassword(Request $request)
    {
       
      if (!(Hash::check($request->get('current-password'), Auth::user()->password))) 
      {
      // The passwords matches
        return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
      }
       
      if(strcmp($request->get('current-password'), $request->get('new-password')) == 0)
      {
      //Current password and new password are same
        return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
      }

      if(!(strcmp($request->get('new-password'), $request->get('new-password-confirm'))) == 0)
      {
          //New password and confirm password are not same
        return redirect()->back()->with("error","New Password should be same as your confirmed password. Please retype new password.");
      }

      //Change Password
      $user = Auth::user();
      $user->password = bcrypt($request->get('new-password'));
      $user->save();
       
      return redirect()->back()->with("success","Password changed successfully !");
       
    }



    public function destroy($id)
    {
        //
    }
}
