<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(Request $req){
        // $credentials = $req->only('email', 'password');

        $credentials = $req->validate(
            ['email'=> 'required', 'password' => 'required'],
            ['email.required'=>'Email wajib diisi', 'password.required'=>'Password wajib diisi']
        );

        $informasi=[
            'email'=>$req->email,
            'password'=>$req->password
        ];

        if(Auth::attempt($credentials)){
            if(Auth::user()->level=='operator'){
                return redirect()->intended('/home');
            }
            return redirect('admin/home');
        }
        return back()->withErrors('Email dan password salah')->withInput();
        
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
}
