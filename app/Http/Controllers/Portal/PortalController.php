<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortalController extends Controller
{
    public function index()
    {
        return view('portal.pages.index');
    }
    public function tentang()
    {
        return view('portal.pages.tentang');
    }
    public function detaildestinasi()
    {
        return view('portal.pages.detaildestinasi');
    }

   // buat nambahin function lain disini ges
}
