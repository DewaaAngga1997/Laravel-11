<?php

//code use App\Models\Post adalah untuk memanggil model di folder App\Models\Post.php agar clas yang kita buat bisa di gunakan di route web.php
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('homepage', ["title" => "Home Page"]);
});

Route::get('/posts', function () {
    return view('posts', ["title" => "Blog", "posts" => Post::all()]);
});

Route::get('/post/{post:slug}', function (Post $post) {
 
        return view ('post', [
            "title" => 'Detail Blog',
            "post" => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
 
        return view ('posts', [
            "title" => 'Artikel by ' . $user->name,
            "posts" => $user->posts]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});




