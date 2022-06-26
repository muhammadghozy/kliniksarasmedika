<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RawatInapController;
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



Route::get('/edit-rawat-inap', function () {
    return view('edit-rawat-inap');
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
Route::get('/logout', [LoginController::class, 'logout']);

// Register
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function (){
    return view('dashboard');
})->middleware('auth');


// Route::get('/user-profile', [UserDataController::class, 'edit'])->middleware('auth');
Route::patch('/user-profile/{id}', [UserDataController::class, 'update'])->name('update');

Route::get('/user-management', [UserDataController::class, 'index'])->middleware('auth');
Route::get('/edit-user/{id}', [UserDataController::class, 'edit']);
Route::patch('/update-user/{id}', [UserDataController::class, 'update'])->name('update');


Route::get('/rawat-jalan', [RawatJalanController::class, 'create'])->middleware('auth');
Route::post('/rawat-jalan', [RawatJalanController::class, 'store']);
Route::resource('/rekam-medis-rawat-jalan', RawatJalanController::class);

Route::get('/edit-rawat-jalan/{id}',[RawatJalanController::class, 'edit']);
Route::patch('/update-rawat-jalan/{id}',[RawatJalanController::class, 'update'])->name('update');

Route::get('/rawat-inap', [RawatInapController::class, 'create'])->middleware('auth');
Route::post('/rawat-inap', [RawatInapController::class, 'store']);
Route::resource('/rekam-medis-rawat-inap', RawatInapController::class);

Route::get('/edit-rawat-inap/{id}',[RawatInapController::class, 'edit']);
Route::patch('/update-rawat-inap/{id}',[RawatInapController::class, 'update'])->name('update');
