<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function login(){
    return view('login', [
        'title' => "Log In",
    ]);
   }

   public function postlogin(Request $request){
    if(Auth::guard('humas')->attempt(['username' => $request->username,'password' => $request->password])){
        return redirect('/humas/dashboard')->with('success', 'Login Berhasil!');
    }
    elseif(Auth::guard('guru')->attempt(['username' => $request->username,'password' => $request->password])){
        return redirect('/guru/dashboard')->with('success', 'Login Berhasil!');
    }
    elseif(Auth::guard('dudi')->attempt(['username' => $request->username,'password' => $request->password])){
        return redirect('/dudi/dashboard')->with('success', 'Login Berhasil!');
    }
    elseif(Auth::guard('siswa')->attempt(['username' => $request->username,'password' => $request->password])){
        return redirect('/siswa/dashboard')->with('success', 'Login Berhasil!');
    }
    return redirect('/login')->with('warning', 'Login Gagal! <br> Pastikan Katasandi / <br> Username Yang benar!');
   }

   public function logout(){

    if(Auth::guard('humas')->check()){
        Auth::guard('humas')->logout();
    }elseif(Auth::guard('guru')->check()){
        Auth::guard('guru')->logout();
    }elseif(Auth::guard('dudi')->check()){
        Auth::guard('dudi')->logout();
    }elseif(Auth::guard('siswa')->check()){
        Auth::guard('siswa')->logout();
    }
    return redirect('/login');
   }
}