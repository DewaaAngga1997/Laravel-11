<?php

//di laravel ada yang namanya auto load model kita harus menambahkan namespace App\Models dulu agar bisa memanggilnya di route web.php
namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Dewa Angga",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam architecto quasi
            perspiciatis labore
            aliquid explicabo nam iste, quis quod cum esse, voluptatum, omnis provident. Ex, maiores. Hic quis in
            deserunt!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dewa Angga",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error quae corrupti
            explicabo in a earum ipsum eum hic sed debitis? Voluptatem cum labore soluta quo unde eligendi inventore in
            ullam."
        ]
    ];
    }
    public static function find($slug) : array
     {
      
        // return Arr::static(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
            if (!$post) {
                abort(404);
            }

        return $post;
        
    }
}