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
<<<<<<< HEAD
    public function artikel()
    {
        return view('portal.pages.artikel');
=======
    public function detailDestinasiBali()
    {
        return view('portal.pages.detaildestinasibali');
    }
    public function detailDestinasiJogja()
    {
        return view('portal.pages.detaildestinasijogja');
>>>>>>> 42d5c3ab6d1c2457e29e841a3d71c23bc6902b24
    }

   // buat nambahin function lain disini ges
   public function galeri()
   {
       return view('portal.pages.galeri');
   }
}
