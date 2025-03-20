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