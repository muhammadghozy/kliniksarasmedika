<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RawatJalanController;

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



Route::get('/', function () {
    return view('home');
});

Route::get('/user-profile', function () {
    return view('user-profile');
});

Route::get('/rawat-inap', function () {
    return view('rawat-inap');
});


Route::get('/rawat-jalan-dokter', function () {
    return view('rawat-jalan-dokter');
});

Route::get('/jadwal-praktik', function () {
    return view('jadwal-praktik');
});

Route::get('/rekam-medis', function () {
    return view('rekam-medis');
});

Route::get('/rekam-medis-rawat-inap', function () {
    return view('rekam-medis-rawat-inap');
});

Route::get('/rekam-medis-rawat-inap-admin', function () {
    return view('rekam-medis-rawat-inap-admin');
});

Route::get('/rekam-medis-rawat-jalan', function () {
    return view('rekam-medis-rawat-jalan');
});

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function (){
    return view('dashboard');
})->middleware('auth');


// Route::get('/user-profile', [ProfileController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/user-profile', [ProfileController::class, 'store']);

Route::get('/rawat-jalan', [RawatJalanController::class, 'create'])->middleware('auth');
Route::post('/rawat-jalan', [RawatJalanController::class, 'store']);