<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Destinasi;
use App\Models\Faq;
use App\Models\Galeri;
use App\Models\Penawaran;
use App\Models\Pesan;

class PortalController extends Controller
{
    public function coba() 
    {
        return view('portal.pages.coba');    
    }
    public function index()
    {
        $get_galeri = Galeri::select('*')->get();
        $get_destinasi = Destinasi::select('*')->get();
        $get_artikel = Artikel::orderBy('created_at', 'desc')->limit(2)->get();

        $data = [
            'get_galeri' => $get_galeri,
            'get_destinasi' => $get_destinasi,
            'get_artikel' => $get_artikel
        ];

        return view('portal.pages.index',['data' => $data]);
    }
    public function tentang()
    {
        return view('portal.pages.tentang');
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

        session()->flash('success', 'Pesan Anda Sudah kami terima, terimakasih atas kepercayaan anda. Untuk info lebih lanjut kami akan menghubungi anda');

        return view('portal.pages.kontak', ['data' => $data, 'data_destinasi' => $data_destinasi, 'get_faq' => $get_faq]);
    }
    public function destinasi()
    {
        $get_penawaran = Penawaran::select('*')->get();
        $get_destinasi = Destinasi::select('*')->get();

        $data = [
            'get_penawaran' => $get_penawaran,
            'get_destinasi' => $get_destinasi
        ];
        

        return view('portal.pages.destinasi',['data' => $data]);
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
        $get_artikel = Artikel::select('*')->get();

        $data = [
            "get_artikel" => $get_artikel
        ];

        return view('portal.pages.artikel',['data' => $data]);

    }

    public function artikel1()
    {
        return view('portal.pages.artikel1');

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
        $get_galeri = Galeri::select('*')->get();

        $data = [
            'get_galeri' => $get_galeri
        ];

       return view('portal.pages.galeri', ['data'=>$data]);
   }
}
