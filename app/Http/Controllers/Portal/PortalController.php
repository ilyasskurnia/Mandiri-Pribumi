<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Destinasi;
use App\Models\Destinasi_children;
use App\Models\Faq;
use App\Models\Galeri;
use App\Models\Penawaran;
use App\Models\Pesan;
use Carbon\Carbon;

class PortalController extends Controller
{
    public function coba() 
    {
        return view('portal.pages.coba');    
    }
    public function index()
    {
        $get_galeri = Galeri::limit('8')->get();
        $get_destinasi = Destinasi::select('*')->get();
        $get_artikel = Artikel::orderBy('created_at', 'desc')->limit(2)->get();
        $get_artikel->transform(function ($item) {
            $item->created_at_formatted = Carbon::parse($item->created_at)->format('d-m-Y');
            return $item;
        });

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

        session()->put('success', 'Pesan Anda Sudah kami terima, terimakasih atas kepercayaan anda. Untuk info lebih lanjut kami akan menghubungi anda');

        return view('portal.pages.kontak', ['data' => $data, 'data_destinasi' => $data_destinasi, 'get_faq' => $get_faq]);
    }
    public function destinasi()
    {
        $get_penawaran = Penawaran::select('*')->get();
        $get_destinasi = Destinasi::select('*')->get();
        $get_penawaran1 = Penawaran::where('id', 1)->pluck('deskripsi')->first();
        $get_penawaran2 = Penawaran::where('id', 2)->pluck('deskripsi')->first();
        $get_penawaran3 = Penawaran::where('id', 3)->pluck('deskripsi')->first();

        $data = [
            'get_destinasi' => $get_destinasi,
            'get_penawaran' => $get_penawaran,
            'get_penawaran1' => $get_penawaran1,
            'get_penawaran2' => $get_penawaran2,
            'get_penawaran3' => $get_penawaran3
        ];
        

        return view('portal.pages.destinasi',['data' => $data]);
    }

    public function destinasi1()
    {
        return view('portal.pages.destinasi1');
    }

    public function detailartikel($id)
    {
        $get_data = Artikel::where('id', $id)->get();
        $get_data->transform(function ($item) {
            $item->created_at_formatted = Carbon::parse($item->created_at)->format('d-m-Y');
            return $item;
        });
        $get_kategori = Artikel::pluck('jenis_artikel');
        $get_random = Artikel::inRandomOrder()->limit(6)->get();
        $get_random->transform(function ($item) {
            $item->created_at_formatted = Carbon::parse($item->created_at)->format('d-m-Y');
            return $item;
        });

        $data = [
            'get_data' => $get_data,
            'get_kategori' => $get_kategori,
            'get_random' => $get_random
        ];

        return view('portal.pages.detailartikel', ['data' => $data]);
    }

    public function artikel()
    {
        $get_artikel = Artikel::select('*')->paginate(5);
        $get_artikel->transform(function ($item) {
            $item->created_at_formatted = Carbon::parse($item->created_at)->format('d-m-Y');
            return $item;
        });
        $get_new = Artikel::orderBy('created_at', 'desc')->limit(1)->get();
        $get_new->transform(function ($item) {
            $item->created_at_formatted = Carbon::parse($item->created_at)->format('d-m-Y');
            return $item;
        });
        $get_new2 = Artikel::orderBy('created_at', 'desc')->offset(1)->limit(4)->get();
        $get_new2->transform(function ($item) {
            $item->created_at_formatted = Carbon::parse($item->created_at)->format('d-m-Y');
            return $item;
        });
        $get_random = Artikel::inRandomOrder()->limit(6)->get();
        $get_random->transform(function ($item) {
            $item->created_at_formatted = Carbon::parse($item->created_at)->format('d-m-Y');
            return $item;
        });
        $get_kategori = Artikel::pluck('jenis_artikel');



        $data = [
            "get_artikel" => $get_artikel,
            "get_new" => $get_new,
            'get_new2' => $get_new2,
            "get_random" => $get_random,
            'get_kategori' => $get_kategori
        ];
        

        return view('portal.pages.artikel',['data' => $data]);

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

    public function kategoriArtikel()
    {
        return view('portal.pages.kategoriartikel');
    }
   public function galeri()
   {
        $get_galeri = Galeri::select('*')->get();

        $data = [
            'get_galeri' => $get_galeri
        ];

       return view('portal.pages.galeri', ['data'=>$data]);
   }
   public function detaildestinasi($id)
   {
        $get_data = Destinasi_children::where('destinasi_id', $id)->get();
        $get_destinasi = Destinasi::where('id', $id)->get();

        $data = [
            'get_destinasi' => $get_destinasi,
            'get_data' => $get_data
        ];

       return view('portal.pages.detaildestinasi', ['data'=>$data]);
   }
}
