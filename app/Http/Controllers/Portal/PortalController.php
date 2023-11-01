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
    public function kontak()
    {
        return view('portal.pages.kontak');
    }
    public function destinasi()
    {
        return view('portal.pages.destinasi');
    }
    public function detailartikel()
    {
        return view('portal.pages.detailartikel');

    }

    public function artikel()
    {
        return view('portal.pages.artikel');

    }

    public function detailDestinasiBali()
    {
        return view('portal.pages.detaildestinasibali');
    }
    public function detailDestinasiJogja()
    {
        return view('portal.pages.detaildestinasijogja');
    }
    public function detailDestinasiKarimun()
    {
        return view('portal.pages.detaildestinasikarimun');
    }
    public function detailDestinasiMalang()
    {
        return view('portal.pages.detaildestinasimalang');
    }


   // buat nambahin function lain disini ges
   public function galeri()
   {
       return view('portal.pages.galeri');
   }
}
