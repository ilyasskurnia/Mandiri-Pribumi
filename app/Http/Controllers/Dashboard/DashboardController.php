<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    // public function login (){
    //     return view('dashboard.auth.login');
    // }
    public function home()
    {
        return view('dashboard.pages.home');
    }

    // buat nambahin function lain disini ges
}
