<?php

use Illuminate\Support\Facades\Route;

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/home', function () {
    return view('pages.home', [
        'nim' => '707082400069'
    ]);
});

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama' => 'Moh. Rifqi Ramadhan',
        'nim' => '707082400069',
        'kelas' => 'S1TRM-48-03',
        'status' => 'Aktif',
    ]);
});

Route::get('/profile', function () {
    return view('pages.profile', [
        'nama' => 'Moh. Rifqi Ramadhan',
        'nim' => '707082400069',
        'kelas' => 'S1TRM-48-03',
        'prodi' => 'Teknologi Rekayasa Multimedia',
        'status' => 'Aktif',
    ]);
});