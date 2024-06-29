<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug): array
    {
        // Call back
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        // Arrow function
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if(! $post) {
            abort(404);
        }

        return $post;
    }
}
?>