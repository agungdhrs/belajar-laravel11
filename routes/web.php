<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Agung Dharma Saputra']);
});

Route::get('/blog', function () {
    return view('blog', ['artikel1' => 'judul artikel1', 'artikel2' => 'judul artikel2', 'isi1' => 'isi artikel 1', 'isi2' => 'isi artikel 2']);
});

Route::get('/contact', function () {
    return view('contact', ['email' => 'agungdharmasaputra2@gmail.com', 'instagram' => '@agungdhr']);
});

// Buat 2 rute baru
// 1. /blog
// 2 buah artikel, judul dan isi
// 2. /contact
// email / social media