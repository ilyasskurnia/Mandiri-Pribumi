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
    public function artikel()
    {
        return view('dashboard.pages.artikel');
    }
    public function pesan()
    {
        return view('dashboard.pages.pesan');
    }
    public function galeri()
    {
        return view('dashboard.pages.galeri');
    }
    public function paketdestinasi()
    {
        return view('dashboard.pages.paketdestinasi');
    }
    public function tambahpaket()
    {
        return view('dashboard.pages.destinasi.add');
    }
    public function tambahartikel()
    {
        return view('dashboard.pages.artikel.add');
    }
    public function tambahgaleri()
    {
        return view('dashboard.pages.galeri.add');
    }
}
