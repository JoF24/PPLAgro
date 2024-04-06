<?php

use App\Http\Controllers\halaman_utama;
use App\Http\Controllers\login;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\Configuration\Source;

Route::get('/', function () {
    return view('halaman_utama');
});

Route::resource('login',login::class);
Route::resource('pelatihan',halaman_utama::class);