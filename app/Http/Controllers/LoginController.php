<?php

namespace App\Http\Controllers;

use Auth; //panggil auth
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanlogin() {
        return view('login.login-aplikasi');
    }

    public function postlogin(Request $request) {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }
        return redirect('/');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
