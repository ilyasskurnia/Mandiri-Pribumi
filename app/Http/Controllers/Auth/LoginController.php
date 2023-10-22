<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // public function showLoginForm()
    // {
    //     return view('auth.login');
    // }

    public function postLoginForm(Request $request)
    {
        //
    }

        public function login()
    {
        return view('auth.login');
    }
    
    public function authenticate (Request $request) 
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        dd('berhasil login');
    }

    // buat nambahin function lain disini ges
}