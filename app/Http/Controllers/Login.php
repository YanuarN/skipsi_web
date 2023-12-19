<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class Login extends Controller
{
    public function index(){
        return view('login.login_user');
    }

    public function authtenticate(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if(FacadesAuth::attempt($credentials)){
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        } else if(FacadesAuth::attempt($credentials)){
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }
}
