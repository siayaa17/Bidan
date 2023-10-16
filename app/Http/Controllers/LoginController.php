<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('index');
    }
    public function postLogin (Request $request){
        $request->validate([
        'g-recaptcha-response'=>'required'
        ]);
        // dd($request->all());
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/index');
        }
        return redirect('/');
    }
    public function logout (Request $request){
        Auth::logout();
        return redirect('login');
    }
}
