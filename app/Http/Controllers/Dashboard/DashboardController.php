<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\Destinasi;
use App\Models\Faq;
use App\Models\Pesan;

class DashboardController extends Controller
{
    public function home()
    {
        $total_pesan = Pesan::count();
        $total_destinasi = Destinasi::count();

        $paket_destinasi = Destinasi::limit('3')->get();
        $pesan_masuk = Pesan::limit('4')->get();
        foreach ($pesan_masuk as $pesan) {
            $pesan->created_at = Carbon::parse($pesan->created_at)->timezone('Asia/Jakarta');
        }
        
        $card = [
            'total_pesan' => $total_pesan,
            'total_destinasi' => $total_destinasi,
            'paket_destinasi' => $paket_destinasi,
            'pesan_masuk' => $pesan_masuk
        ];

        return view('dashboard.pages.home', ['card' => $card]);
    }
    public function artikel()
    {
        return view('dashboard.pages.artikel');
    }
    public function pesan()
    {
        $get_data = Pesan::select('*')->paginate(5);
        // dd($data);
        $total_item = Pesan::count();
        foreach ($get_data as $pesan) {
            $pesan->created_at = Carbon::parse($pesan->created_at)->timezone('Asia/Jakarta');
            
        }

        $data = [
            'get_data' => $get_data,
            'total_item' => $total_item
        ];
        return view('dashboard.pages.pesan', ['data' => $data]);
    }
    public function galeri()
    {
        return view('dashboard.pages.galeri');
    }
    public function paketdestinasi()
    {
        $get_data = Destinasi::select('*')->paginate(5);
        // dd($data);
        $total_item = Destinasi::count();

        $data = [
            'get_data' => $get_data,
            'total_item' => $total_item
        ];
        return view('dashboard.pages.paketdestinasi', ['data' => $data]);
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
    public function tambahpesan()
    {
        $data_destinasi = Destinasi::pluck('destinasi');

        return view('dashboard.pages.pesan.add', ['data_destinasi' => $data_destinasi]);
    }
    public function postdestinasi (Request $request) 
    {
        $data = $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif',
            'destinasi' => 'required|string',
            'peta_wisata' => 'required|image|mimes:jpeg,png,jpg,gif',
            'rute' => 'required|string',
            'brosure' => 'required|file|mimes:pdf',
            'total_waktu' => 'required|string',
            'biaya' => 'required|string',
        ]);

        // Simpan data ke database menggunakan model Destinasi
        $destinasi = new Destinasi;
        $destinasi->thumbnail = $request->file('thumbnail')->store('public/destinasi/thumbnail');
        $destinasi->destinasi = $request->destinasi;
        $destinasi->peta_wisata = $request->file('peta_wisata')->store('public/destinasi/peta_wisata');
        $destinasi->rute = $request->rute;
        $destinasi->brosure = $request->file('brosure')->store('public/destinasi/brosure'); 
        $destinasi->total_waktu = $request->total_waktu;
        $destinasi->biaya = $request->biaya;

        $destinasi->save();

        session()->flash('success', 'Data berhasil disimpan.');

        return view('dashboard.pages.destinasi.add');
        
    }
    public function destroydestinasi ($id)
    {
        $data = Destinasi::find($id);
        $data->delete();
        return redirect()->route('paketdestinasi');
    }
    public function postpesan (Request $request)
    {
        $data_destinasi = Destinasi::pluck('destinasi');
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

        return view('dashboard.pages.pesan.add', ['data_destinasi' => $data_destinasi]);
    }
    public function destroypesan ($id)
    {
        $data = Pesan::find($id);
        $data->delete();
        return redirect()->route('pesan');
    }
    public function editpesan ($id)
    {
        $data = Pesan::find($id);
        
        return view('dashboard.pages.pesan.edit',['data' => $data]);
    }
    public function faq()
    {
        $get_data = Faq::select('*')->paginate(5);
        // dd($data);
        $total_item = Faq::count();

        $data = [
            'get_data' => $get_data,
            'total_item' => $total_item
        ];

        return view('dashboard.pages.faq', ['data' => $data]);
    }
    public function tambahfaq()
    {
        return view('dashboard.pages.faq.add');
    }
    public function postfaq(Request $request)
    {
        $data = $request->validate([
            'pertanyaan' => 'required|string',
            'jawaban' => 'required|string'
        ]);

        // Simpan data ke database menggunakan model pesan
        $faq = new Faq;
        $faq->pertanyaan = $request->pertanyaan;
        $faq->jawaban = $request->jawaban;

        $faq->save();

        session()->flash('success', 'Data berhasil disimpan.');

        return view('dashboard.pages.faq.add');
    }
    public function destroyfaq ($id)
    {
        $data = Faq::find($id);
        $data->delete();
        return redirect()->route('faq');
    }
    public function editfaq ($id)
    {
        $data = Faq::find($id);
        
        return view('dashboard.pages.faq.edit',['data' => $data]);
    }
    public function updatefaq ($id, Request $request)
    {
        $data = Faq::find($id);
        $data->update($request->except(['_token','submit']));
        return redirect()->route('faq');
    }
}
