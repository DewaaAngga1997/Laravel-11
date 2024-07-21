<?php

//di laravel ada yang namanya auto load model kita harus menambahkan namespace App\Models dulu agar bisa memanggilnya di route web.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Post extends Model{}

