<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba melakukan otentikasi
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Otentikasi berhasil, arahkan ke halaman dashboard atau yang sesuai
            return redirect('/dashboard');
        } else {
            // Otentikasi gagal, kembali ke halaman login dengan pesan kesalahan
            return back()->withErrors(['email' => 'Email atau password salah']);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout(); // Logout pengguna
        $request->session()->invalidate(); // Menghapus sesi
        $request->session()->regenerateToken(); // Membuat token sesi yang baru
        return redirect('/'); // Redirect ke halaman login atau halaman lain yang sesuai
    }

}
