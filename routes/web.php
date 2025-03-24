<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login/{id}/{nama}', [LoginController::class, 'tampilkan']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('halaman_masuk_admin');
});

Route::get('/', function () {
    return view('halaman_utama');
});

Route::get('/search', function () {
    return view('hal_pencarian');
});

Route::get('/dashboard', function () {
    return view('halaman_admin');
});

Route::get('/home', function () {
    return view('halaman_beranda');
});

Route::get('/product', function () {
    return view('halaman_katalog');
});

Route::get('/register', function () {
    return view('halaman_register');
});

