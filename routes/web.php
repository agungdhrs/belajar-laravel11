<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Agung Dharma Saputra', 'title' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'artikel1' => 'judul artikel1', 'artikel2' => 'judul artikel2', 'isi1' => 'isi artikel 1', 'isi2' => 'isi artikel 2']);
});

Route::get('/contact', function () {
    return view('contact', ['email' => 'agungdharmasaputra2@gmail.com', 'instagram' => '@agungdhr', 'title' => 'Contact']);
});