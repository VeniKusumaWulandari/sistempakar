<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(){
        return view('login');
    }

    function loginProcess(){


       if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
         return redirect('admin/beranda')->with('success','Login Berhasil');

     }else{
        return back()->with('danger','Password/Username salah');
        }
    }


    
     public function logout(){
        Auth::logout();
        return redirect('login')->with('success', 'Anda berhasil logout');
    }
}
