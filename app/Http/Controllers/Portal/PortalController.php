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

   // buat nambahin function lain disini ges
}
