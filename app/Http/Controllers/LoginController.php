<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // login
    public function login(){
        return view('login.login');
    }

    public function logstore(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard');
        }

        return redirect()->route('login');
    }
    // end login

    // register
    public function register(){
        return view('login.register');
    }

    public function regstore(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect()->route('login');  //redirect ke halaman login

        // dd($request->all());
    }
    // end register

    // logout
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    // end logout 
}
