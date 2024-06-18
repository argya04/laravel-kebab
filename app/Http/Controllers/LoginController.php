<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function indexLogin(){
        return view('login/login');
    }

    function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => 'username tidak boleh kosong',
            'password.required' => 'password tidak boleh kosong',
        ]);
        
        $loginInfo = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if(Auth::attempt($loginInfo)){
            return redirect('penjual');
        }
        else{
            return redirect('/login')->withErrors('username atau password salah')->withInput();
        }
    }
}
