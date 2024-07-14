<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index(){
        return view('login');
    }
    function login(Request $request){
        $request->validate([
            'NIP'=>'required',
            'password'=>'required'
        ],[
            'NIP.required'=>'NIP Wajib Diisi',
            'password.required'=>'Password Wajib Diiisi'
        ]);

        $infologin =[
            'NIP'=>$request->NIP,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->user == 'kurikulum'){
                return redirect('admin/dashboard-kurikulum');
            } elseif(Auth::user()->user == 'guru'){
                return redirect('admin/dashboard-guru');
            }
        }else{
            return redirect('')->withErrors('NIP dan Password yang dimasukkan tidak sesuai')->withInput();
        }
    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}
