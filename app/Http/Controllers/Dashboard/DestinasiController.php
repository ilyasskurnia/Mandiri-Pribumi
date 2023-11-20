<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use App\Models\Destinasi_children;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinasiController extends Controller
{
    public function index($destinasi_id)
    {
        // Ambil data destinasi berdasarkan ID
        $destinasi = Destinasi::find($destinasi_id);
        $get_destinasi = Destinasi::select('destinasi')->find($destinasi_id);

        // Ambil data destinasi_children
        $get_data = Destinasi_children::where('destinasi_id', $destinasi_id)->paginate(5);


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

        return view('dashboard.pages.detail_destinasi.add', ['destinasi' => $destinasi, 'get_data' => $get_data, 'id' => $id]);
        
    }
    public function editdetail ($destinasi_id, $child_id)
    {
        $data = Destinasi_children::find($child_id);
        $destinasi = Destinasi::find($destinasi_id);
    
        return view('dashboard.pages.detail_destinasi.edit', ['data' => $data, 'destinasi' => $destinasi]);
    }
    public function destroy_detail($destinasi_id, $child_id)
    {
        $data = Destinasi_children::find($child_id);
    
        if ($data->thumbnail) {
            Storage::delete($data->thumbnail);
        }
    
        $data->delete();
    
        // Redirect kembali ke halaman index child dengan menyertakan $destinasi_id
        return redirect()->route('detail_destinasi', ['destinasi_id' => $destinasi_id]);
    }
    public function update_detail(Request $request, $destinasi_id, $child_id)
    {
        
        // Validasi data yang diterima dari formulir
        $destinasi = Destinasi::find($destinasi_id);
        $request->validate([
            'days' => 'required|string',
            'detail_rute' => 'required|string',
            'deskripsi' => 'required|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif', // Gunakan nullable agar thumbnail bisa kosong
        ]);

        // Ambil data destinasi_child berdasarkan ID
        $destinasi_child = Destinasi_children::find($child_id);

        // Pastikan data ditemukan sebelum melakukan update
        if (!$destinasi_child) {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }

        // Update data berdasarkan input dari formulir
        $destinasi_child->days = $request->days;
        $destinasi_child->detail_rute = $request->detail_rute;
        $destinasi_child->deskripsi = $request->deskripsi;

        // Cek apakah thumbnail baru diupload
        if ($request->hasFile('thumbnail')) {
            // Hapus thumbnail lama jika ada
            if ($destinasi_child->thumbnail) {
                Storage::delete($destinasi_child->thumbnail);
            }

            // Simpan thumbnail baru
            $destinasi_child->thumbnail = $request->file('thumbnail')->store('destinasi_children/thumbnail');
        }

        // Simpan perubahan ke database
        $destinasi_child->save();

        // Redirect kembali ke halaman detail dengan pesan sukses
        return redirect()->route('detail_destinasi', ['destinasi_id' => $destinasi_id])->with('success', 'Data berhasil diperbarui.');
    }
    
}
