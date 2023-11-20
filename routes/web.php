<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DestinasiController;
use App\Http\Controllers\Portal\PortalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', 'portal');

Route::group(['prefix' => 'portal'], function () {
    Route::get('/', [PortalController::class, 'index']);
    // route lain portal tambahin di bawah sini
    Route::get('/tentang', [PortalController::class, 'tentang']);
    Route::get('/destinasi', [PortalController::class, 'destinasi']);
    Route::get('/kontak', [PortalController::class, 'kontak']);
    Route::post('/kontak', [PortalController::class, 'addkontak']);
    Route::get('/detailartikel', [PortalController::class, 'detailartikel']);
    Route::get('/artikel', [PortalController::class, 'artikel']);
    Route::get('/galeri', [PortalController::class, 'galeri']);
    Route::get('/detaildestinasibali', [PortalController::class, 'detaildestinasibali']);
    Route::get('/detaildestinasijogja', [PortalController::class, 'detaildestinasijogja']);
    Route::get('/detaildestinasikarimun', [PortalController::class, 'detaildestinasikarimun']);
    Route::get('/detaildestinasimalang', [PortalController::class, 'detaildestinasimalang']);
    Route::get('/coba', [PortalController::class, 'coba']);
});

Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    // Rute untuk halaman login kustom
    Route::get('/', [DashboardController::class, 'home']);

    Route::get('/artikel', [DashboardController::class, 'artikel'])->name('artikel');
    Route::get('/tambahartikel', [DashboardController::class, 'tambahartikel']);
    Route::post('/tambahartikel', [DashboardController::class, 'postartikel']);
    Route::delete('/artikel/{id}', [DashboardController::class, 'destroyartikel']);
    Route::get('/{id}/editartikel', [DashboardController::class, 'editartikel']);
    Route::put('/artikel/{id}', [DashboardController::class, 'updateartikel']);


    Route::get('/pesan', [DashboardController::class, 'pesan'])->name('pesan');
    Route::get('/tambahpesan', [DashboardController::class, 'tambahpesan']);
    Route::post('/tambahpesan', [DashboardController::class, 'postpesan']);
    Route::delete('/pesan/{id}', [DashboardController::class, 'destroypesan']);
    Route::get('/{id}/editpesan', [DashboardController::class, 'editpesan']);
    Route::put('/pesan/{id}', [DashboardController::class, 'updatepesan']);

    Route::get('/galeri', [DashboardController::class, 'galeri'])->name('galeri');
    Route::get('/tambahgaleri', [DashboardController::class, 'tambahgaleri']);
    Route::post('/tambahgaleri', [DashboardController::class, 'postgaleri']);
    Route::delete('/galeri/{id}', [DashboardController::class, 'destroygaleri']);
    Route::get('/{id}/editgaleri', [DashboardController::class, 'editgaleri']);
    Route::put('/galeri/{id}', [DashboardController::class, 'updategaleri']);

    Route::get('/paketdestinasi', [DashboardController::class, 'paketdestinasi'])->name('paketdestinasi');
    Route::get('/tambahpaket', [DashboardController::class, 'tambahpaket']);
    Route::post('/tambahpaket', [DashboardController::class, 'postdestinasi']);
    Route::delete('/paketdestinasi/{id}', [DashboardController::class, 'destroydestinasi']);
    Route::get('/{id}/paketdestinasi', [DashboardController::class, 'editpaket']);
    Route::put('/{id}/paketdestinasi', [DashboardController::class, 'updatepaket']);

    Route::get('/faq', [DashboardController::class, 'faq'])->name('faq');
    Route::get('/tambahfaq', [DashboardController::class, 'tambahfaq']);
    Route::post('/tambahfaq', [DashboardController::class, 'postfaq']);
    Route::delete('/faq/{id}', [DashboardController::class, 'destroyfaq']);
    Route::get('/{id}/editfaq', [DashboardController::class, 'editfaq']);
    Route::put('/faq/{id}', [DashboardController::class, 'updatefaq']);

    Route::group(['prefix' => '{destinasi_id}/detail_destinasi'], function () {
        Route::get('/', [DestinasiController::class, 'index'])->name('detail_destinasi');
        Route::get('/tambah_detail', [DestinasiController::class, 'tambah_detail']);
        Route::post('/tambah_detail', [DestinasiController::class, 'post_detail']);
        Route::get('/{child_id}/editdetail', [DestinasiController::class, 'editdetail']);
        Route::put('/{child_id}', [DestinasiController::class, 'update_detail'])->name('update_detail');
        Route::delete('/{child_id}', [DestinasiController::class, 'destroy_detail']);
    });
});


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
