<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Faq;
use App\Models\Pesan;

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

    public function tentang1()
    {
        return view('portal.pages.tentang1');
    }
    public function kontak()
    {
        $get_faq = Faq::select('*')->get();
        $data_destinasi = Destinasi::pluck('destinasi');

        $data = [
            'get_faq' => $get_faq,
            'data_destinasi' => $data_destinasi
        ];

        return view('portal.pages.kontak', ['data' => $data, 'data_destinasi' => $data_destinasi, 'get_faq' => $get_faq ]);
    }
    public function addkontak (Request $request)
    {
        $data_destinasi = Destinasi::pluck('destinasi');
        $get_faq = Faq::select('*')->get();

        $data = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|string',
            'social_media' => 'required|string',
            'telepon' => 'required|numeric',
            'destinasi' => 'required|string',
            'tanggal' => 'required|string',
            'pesan' => 'required|string',
        ]);

        // Simpan data ke database menggunakan model pesan
        $pesan = new Pesan;
        $pesan->nama = $request->nama;
        $pesan->email = $request->email;
        $pesan->social_media = $request->social_media;
        $pesan->telepon = $request->telepon;
        $pesan->destinasi = $request->destinasi;
        $pesan->tanggal = $request->tanggal;
        $pesan->pesan = $request->pesan;

        $pesan->save();

        session()->flash('success', 'Data berhasil disimpan.');

        return view('portal.pages.kontak', ['data' => $data, 'data_destinasi' => $data_destinasi, 'get_faq' => $get_faq]);
    }
    public function destinasi()
    {
        return view('portal.pages.destinasi');
    }

    public function destinasi1()
    {
        return view('portal.pages.destinasi1');
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
   public function galeri()
   {
       return view('portal.pages.galeri');
   }
}
