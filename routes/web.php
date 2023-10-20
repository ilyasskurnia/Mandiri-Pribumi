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
<<<<<<< HEAD
    Route::get('/artikel', [PortalController::class, 'artikel']);
=======
    Route::get('/detaildestinasibali', [PortalController::class, 'detaildestinasibali']);
    Route::get('/detaildestinasijogja', [PortalController::class, 'detaildestinasijogja']);
    Route::get('/galeri', [PortalController::class, 'galeri']);
>>>>>>> 42d5c3ab6d1c2457e29e841a3d71c23bc6902b24
});

// Auth::routes();

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', [DashboardController::class, 'home']);
    // tambahkan rute lain untuk dashboard di sini
});

// 'middleware' => 'auth'

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);

