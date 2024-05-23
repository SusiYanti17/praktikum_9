<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/biodata', function () {
    return '<h2>Nama: Susi Yanti</h2><br><h2>NIM: 0110123240</h2><br><h2>Rombel: SI05</h2>';
});

Route::get('/profil', function () {
    return view('profil',[
        "nama" => "Susi Yanti",
        "umur" => 19,
        "email" => "susi@sample.com",
        "kampus" => "STT terpadu Nurul Fikri",
        "alamat" => "Palembang"

    ]);
});


Route::get('/admin', [AdminController::class,'index']);