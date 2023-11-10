<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Destinasi_children;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index($id)
    {
        // Ambil data destinasi berdasarkan ID
        $destinasi = Destinasi::find($id);
        $get_destinasi = Destinasi::select('destinasi')->find($id);
        $get_data = Destinasi_children::where('destinasi_id', $id)->paginate(5);

        $card = [
            'destinasi' => $destinasi,
            'get_destinasi' => $get_destinasi,
            'get_data' => $get_data,
        ];

        // Kirim data destinasi ke view
        return view('dashboard.pages.detail_destinasi', ['card' => $card]);
    }
    public function tambah_detail($id)
    {
        $destinasi = Destinasi::find($id);

        return view('dashboard.pages.detail_destinasi.add', ['destinasi' => $destinasi]);
    }
    public function post_detail (Request $request, $id)
    {
        $destinasi = Destinasi::find($id);
        $get_data = Destinasi_children::where('destinasi_id', $id)->get();

        $data = $request->validate([
            'days' => 'required|string',
            'detail_rute' => 'required|string',
            'deskripsi' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Simpan data ke database menggunakan model galeri
        $destinasi_children = new Destinasi_children();
        $destinasi_children->destinasi_id = $request->destinasi_id;
        $destinasi_children->days = $request->days;
        $destinasi_children->detail_rute = $request->detail_rute;
        $destinasi_children->deskripsi = $request->deskripsi;
        $destinasi_children->thumbnail = $request->file('thumbnail')->store('destinasi_children/thumbnail');

        $destinasi_children->save();

        session()->flash('success', 'Data berhasil disimpan.');

        return view('dashboard.pages.paketdestinasi');

    }
}
