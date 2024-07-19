<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('homepage', ["title" => "Home Page"]);
});

Route::get('/posts', function () {
    return view('posts', ["title" => "Blog", "posts" =>[
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
            "slug" => "judul-post-pertama",
            "author" => "Dewa Angga",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error quae corrupti
            explicabo in a earum ipsum eum hic sed debitis? Voluptatem cum labore soluta quo unde eligendi inventore in
            ullam."
        ]
    ]]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});

