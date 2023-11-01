<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Destinasi;

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
    public function postdestinasi (Request $request) 
    {
        $data = $request->validate([
            'thumbnail' => 'required|image',
            'destinasi' => 'required|string',
            'peta_wisata' => 'required|image',
            'rute' => 'required|string',
            'brosure' => 'required|file|mimes:pdf',
            'total_waktu' => 'required|string',
            'biaya' => 'required|string',
        ]);

            // Simpan data ke database menggunakan model Destinasi
            $destinasi = new Destinasi;
            $destinasi->thumbnail = $request->file('thumbnail')->store('thumbnails'); // Menyimpan gambar thumbnail
            $destinasi->destinasi = $request->destinasi;
            $destinasi->peta_wisata = $request->file('peta_wisata')->store('peta_wisata'); // Menyimpan gambar peta wisata
            $destinasi->rute = $request->rute;
            $destinasi->brosure = $request->file('brosure')->store('brosure'); // Menyimpan berkas brosur
            $destinasi->total_waktu = $request->total_waktu;
            $destinasi->biaya = $request->biaya;

            $destinasi->save();

            session()->flash('success', 'Data berhasil disimpan.');
            
            return view('dashboard.pages.destinasi.add');
        
    }
}
