<?php

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
});

Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    // Rute untuk halaman login kustom
    Route::get('login', [DashboardController::class, 'login'])->name('dashboard.login');


    Route::get('/', [DashboardController::class, 'dashboard.home']);
    // tambahkan rute lain untuk dashboard di sini
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
