<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\DashboardController;
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
    Route::get('/detailartikel', [PortalController::class, 'detailartikel']);
    Route::get('/artikel', [PortalController::class, 'artikel']);
    Route::get('/galeri', [PortalController::class, 'galeri']);
    Route::get('/detaildestinasibali', [PortalController::class, 'detaildestinasibali']);
    Route::get('/detaildestinasijogja', [PortalController::class, 'detaildestinasijogja']);
    Route::get('/detaildestinasikarimun', [PortalController::class, 'detaildestinasikarimun']);
    Route::get('/detaildestinasimalang', [PortalController::class, 'detaildestinasimalang']);
    Route::get('/galeri', [PortalController::class, 'galeri']);
});

Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    // Rute untuk halaman login kustom
    Route::get('/', [DashboardController::class, 'home']);
    // tambahkan rute lain untuk dashboard di sini
    Route::get('/artikel', [DashboardController::class, 'artikel']);
    Route::get('/pesan', [DashboardController::class, 'pesan']);
    Route::get('/galeri', [DashboardController::class, 'galeri']);
    Route::get('/paketdestinasi', [DashboardController::class, 'paketdestinasi']);
    Route::get('/tambahpaket', [DashboardController::class, 'tambahpaket']);
    Route::post('/tambahpaket', [DashboardController::class, 'postdestinasi']);
    Route::get('/tambahartikel', [DashboardController::class, 'tambahartikel']);
    Route::get('/tambahgaleri', [DashboardController::class, 'tambahgaleri']);
});


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

