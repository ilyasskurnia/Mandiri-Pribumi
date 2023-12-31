<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Carbon\Carbon;
use App\Models\Destinasi;
use App\Models\Faq;
use App\Models\Galeri;
use App\Models\Kategori;
use App\Models\Penawaran;
use App\Models\Pesan;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function home()
    {
        $total_pesan = Pesan::count();
        $total_destinasi = Destinasi::count();
        $total_galeri = Galeri::count();
        $total_artikel = Artikel::count();

        $paket_destinasi = Destinasi::limit('3')->get();
        $pesan_masuk = Pesan::limit('4')->get();
        foreach ($pesan_masuk as $pesan) {
            $pesan->created_at = Carbon::parse($pesan->created_at)->timezone('Asia/Jakarta');
        }

        $card = [
            'total_pesan' => $total_pesan,
            'total_destinasi' => $total_destinasi,
            'paket_destinasi' => $paket_destinasi,
            'pesan_masuk' => $pesan_masuk,
            'total_galeri' => $total_galeri,
            'total_artikel' => $total_artikel
        ];

        return view('dashboard.pages.home', ['card' => $card]);
    }

    public function artikel()
    {
        $get_data = Artikel::select('*')->paginate(3);
        $total_item = Artikel::count();
        $get_data->transform(function ($item) {
            $item->created_at_formatted = Carbon::parse($item->created_at)->format('d-m-Y');
            return $item;
        });

        $data = [
            'get_data' => $get_data,
            'total_item' => $total_item
        ];

        return view('dashboard.pages.artikel', ['data' => $data]);
    }
    public function tambahartikel()
    {
        $kategori = Kategori::pluck('jenis_artikel');

        $card = [
            'kategori' => $kategori
        ];

        return view('dashboard.pages.artikel.add', ['card' => $card]);
    }
    public function postartikel (Request $request)
    {
        $kategori = Kategori::pluck('jenis_artikel');

        $card = [
            'kategori' => $kategori
        ];

        $data = $request->validate([
            'jenis_artikel' => 'required|string',
            'author' => 'required|string',
            'title' => 'required|string',
            'deskripsi_singkat' => 'required|string',
            'content' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Simpan data ke database menggunakan model artikel
        $artikel = new Artikel();
        $artikel->jenis_artikel = $request->jenis_artikel;
        $artikel->author = $request->author;
        $artikel->title = $request->title;
        $artikel->deskripsi_singkat = $request->deskripsi_singkat;
        $artikel->content = $request->content;
        $artikel->thumbnail = $request->file('thumbnail')->store('artikel/thumbnail');

        $artikel->save();

        session()->flash('success', 'Data berhasil disimpan.');

        return view('dashboard.pages.artikel.add',['data'=>$data, 'card'=>$card]);

    }
    public function destroyartikel ($id)
    {
        $data = Artikel::find($id);
        if ($data->thumbnail) {
            Storage::delete($data->thumbnail);
        }
        $data->delete();
        return redirect()->route('artikel');
    }
    public function editartikel ($id)
    {
        $data = Artikel::find($id);
        $kategori = Kategori::pluck('jenis_artikel');

        $card = [
            'kategori' => $kategori,
            'data' => $data
        ];

        return view('dashboard.pages.artikel.edit', ['card' => $card]);
    }
    public function updateartikel($id, Request $request)
    {
        // Temukan artikel berdasarkan ID
        $data = Artikel::find($id);

        $input = $request->all();

        if ($thumbnail = $request->file('thumbnail')) {
            // Hapus thumbnail lama jika ada
            Storage::delete($data->thumbnail);
            $thumbnailPath = $thumbnail->store('artikel/thumbnail');
            $input['thumbnail'] = $thumbnailPath;
        }else{
            unset($input['thumbnail']);
        }

        // Update data artikel
        $data->update($input);

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('artikel');
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
    public function tambahpesan()
    {
        $data_destinasi = Destinasi::pluck('destinasi');

        return view('dashboard.pages.pesan.add', ['data_destinasi' => $data_destinasi]);
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
        $data_destinasi = Destinasi::pluck('destinasi');

        return view('dashboard.pages.pesan.edit', ['data' => $data, 'data_destinasi' => $data_destinasi]);
    }
    public function updatepesan ($id, Request $request)
    {
        $data = Pesan::find($id);
        $data->update($request->except(['_token','submit']));
        return redirect()->route('pesan');
    }
    public function galeri()
    {
        $get_data = Galeri::select('*')->paginate(5);
        $total_item = Galeri::count();

        $data = [
            'get_data' => $get_data,
            'total_item' => $total_item
        ];

        return view('dashboard.pages.galeri',['data' => $data]);
    }
    public function tambahgaleri()
    {
        return view('dashboard.pages.galeri.add');
    }
    public function postgaleri (Request $request)
    {
        $data = $request->validate([
            'author' => 'required|string',
            'title_galeri' => 'required|string',
            'thumbnail_galeri' => 'required|image|mimes:jpeg,png,jpg,gif',
            'keterangan' => 'required|string',
        ]);

        // Simpan data ke database menggunakan model galeri
        $galeri = new Galeri;
        $galeri->author = $request->author;
        $galeri->title_galeri = $request->title_galeri;
        $galeri->thumbnail_galeri = $request->file('thumbnail_galeri')->store('galeri/thumbnail');
        $galeri->keterangan = $request->keterangan;

        $galeri->save();

        session()->flash('success', 'Data berhasil disimpan.');

        return view('dashboard.pages.galeri.add');

    }
    public function destroygaleri ($id)
    {
        $data = Galeri::find($id);
        if ($data->thumbnail_galeri) {
            Storage::delete($data->thumbnail_galeri);
        }
        $data->delete();
        return redirect()->route('galeri');
    }
    public function editgaleri ($id)
    {
        $data = Galeri::find($id);

        return view('dashboard.pages.galeri.edit', ['data' => $data]);
    }
    public function updategaleri($id, Request $request)
    {
        // Temukan galeri berdasarkan ID
        $data = Galeri::find($id);

        $input = $request->all();

        // Update data galeri
        if ($thumbnail_galeri = $request->file('thumbnail_galeri')) {
            // Hapus thumbnail lama jika ada
            Storage::delete($data->thumbnail_galeri);
            $thumbnailPath = $thumbnail_galeri->store('galeri/thumbnail');
            $input['thumbnail_galeri'] = $thumbnailPath;
        }else{
            unset($input['thumbnail_galeri']);
        }
        
        $data->update($input);

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('galeri');
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
        $destinasi->thumbnail = $request->file('thumbnail')->store('destinasi/thumbnail');
        $destinasi->destinasi = $request->destinasi;
        $destinasi->peta_wisata = $request->file('peta_wisata')->store('destinasi/peta_wisata');
        $destinasi->rute = $request->rute;
        $destinasi->brosure = $request->file('brosure')->store('destinasi/brosure');
        $destinasi->total_waktu = $request->total_waktu;
        $destinasi->biaya = $request->biaya;

        $destinasi->save();

        session()->flash('success', 'Data berhasil disimpan.');

        return view('dashboard.pages.destinasi.add');

    }
    public function destroydestinasi ($id)
    {
        $data = Destinasi::find($id);
        if ($data->thumbnail) {
            Storage::delete($data->thumbnail);
        }
        if ($data->peta_wisata) {
            Storage::delete($data->peta_wisata);
        }
        if ($data->brosure) {
            Storage::delete($data->brosure);
        }
        $data->delete();
        return redirect()->route('paketdestinasi');
    }
    public function editpaket ($id)
    {
        $data = Destinasi::find($id);
        
        
        return view('dashboard.pages.destinasi.edit', ['data' => $data]);
    }
    public function updatepaket ($id, Request $request)
    {
        $data = Destinasi::find($id);

        $input = $request->all();

        if ($thumbnail = $request->file('thumbnail')) {
            // Hapus thumbnail lama jika ada
            Storage::delete($data->thumbnail);
            $thumbnailPath = $thumbnail->store('destinasi/thumbnail');
            $input['thumbnail'] = $thumbnailPath;
        }else{
            unset($input['thumbnail']);
        }
        if ($peta_wisata = $request->file('peta_wisata')) {
            // Hapus thumbnail lama jika ada
            Storage::delete($data->peta_wisata);
            $peta_wisataPath = $peta_wisata->store('destinasi/peta_wisata');
            $input['peta_wisata'] = $peta_wisataPath;
        }else{
            unset($input['peta_wisata']);
        }
        if ($brosure = $request->file('brosure')) {
            // Hapus thumbnail lama jika ada
            Storage::delete($data->brosure);
            $brosurePath = $brosure->store('destinasi/brosure');
            $input['brosure'] = $brosurePath;
        }else{
            unset($input['brosure']);
        }

        // Update data galeri
        $data->update($input);

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('paketdestinasi');
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
    public function penawaran()
    {
        $get_data = Penawaran::select('*')->paginate(5);
        // dd($get_data);
        $total_item = Penawaran::count();

        $data = [
            'get_data' => $get_data,
            'total_item' => $total_item
        ];

        return view('dashboard.pages.penawaran', ['data' => $data]);
    }
    public function tambahpenawaran()
    {
        return view('dashboard.pages.penawaran.add');
    }
    public function postpenawaran(Request $request)
    {
        $data = $request->validate([
            'deskripsi' => 'required|string'
        ]);

        // Simpan data ke database menggunakan model pesan
        $penawaran = new Penawaran();
        $penawaran->deskripsi = $request->deskripsi;

        $penawaran->save();

        session()->flash('success', 'Data berhasil disimpan.');

        return view('dashboard.pages.penawaran.add');
    }
    public function editpenawaran ($id)
    {
        $data = Penawaran::find($id);

        return view('dashboard.pages.penawaran.edit',['data' => $data]);
    }
    public function updatepenawaran ($id, Request $request)
    {
        $data = Penawaran::find($id);

        $input = $request->all();
        $data->update($input);

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('penawaran');
    }
    public function destroypenawaran ($id)
    {
        $data = Penawaran::find($id);
        $data->delete();
        return redirect()->route('penawaran');
    }
    public function kategori()
    {
        $get_data = Kategori::select('*')->paginate(5);
        // dd($data);
        $total_item = Kategori::count();

        $data = [
            'get_data' => $get_data,
            'total_item' => $total_item
        ];

        return view('dashboard.pages.kategori', ['data' => $data]);
    }
    public function tambahkategori()
    {
        return view('dashboard.pages.kategori.add');
    }
    public function postkategori(Request $request)
    {
        $data = $request->validate([
            'jenis_artikel' => 'required|string'
        ]);

        // Simpan data ke database menggunakan model pesan
        $kategori = new Kategori();
        $kategori->jenis_artikel = $request->jenis_artikel;

        $kategori->save();

        session()->flash('success', 'Data berhasil disimpan.');

        return view('dashboard.pages.kategori.add');
    }
    public function editkategori ($id)
    {
        $data = Kategori::find($id);

        return view('dashboard.pages.kategori.edit',['data' => $data]);
    }
    public function updatekategori ($id, Request $request)
    {
        $data = Kategori::find($id);

        $input = $request->all();
        $data->update($input);

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('kategori');
    }
    public function destroykategori ($id)
    {
        $data = Kategori::find($id);
        $data->delete();
        return redirect()->route('kategori');
    }
}
