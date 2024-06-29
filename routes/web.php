<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Agung Dharma Saputra',
    'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Agung Dharma Saputra',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Doloremque ipsa cum aspernatur odio dolores ipsum modi ab, 
            maxime dicta praesentium esse consequatur cumque natus veniam iste officia eius, 
            perferendis iusto?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Kezia Samantha',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Doloremque ipsa cum aspernatur odio dolores ipsum modi ab, 
            maxime dicta praesentium esse consequatur cumque natus veniam iste officia eius, 
            perferendis iusto?'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Agung Dharma Saputra',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Doloremque ipsa cum aspernatur odio dolores ipsum modi ab, 
            maxime dicta praesentium esse consequatur cumque natus veniam iste officia eius, 
            perferendis iusto?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Kezia Samantha',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Doloremque ipsa cum aspernatur odio dolores ipsum modi ab, 
            maxime dicta praesentium esse consequatur cumque natus veniam iste officia eius, 
            perferendis iusto?'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post',
    'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['email' => 'agungdharmasaputra2@gmail.com', 
    'instagram' => '@agungdhr', 
    'title' => 'Contact']);
});