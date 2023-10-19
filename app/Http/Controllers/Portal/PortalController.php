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
    public function detailDestinasiBali()
    {
        return view('portal.pages.detaildestinasibali');
    }
    public function detailDestinasiJogja()
    {
        return view('portal.pages.detaildestinasijogja');
    }

   // buat nambahin function lain disini ges
   public function galeri()
   {
       return view('portal.pages.galeri');
   }
}
