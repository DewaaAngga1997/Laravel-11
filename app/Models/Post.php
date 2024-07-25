<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

        // protected $fillable = data mana saja yang boleh di input di database 
        protected $fillable = ['title', 'slug', 'body', 'author'];
        // with = relasi mana saja yang akan menggunakan eager loading 
        // agar data yang ditampilkan lebih cepat biasanya di gunakan untuk pengambilakn data looping
        protected $with = ['category', 'author'];

        //membuat relasi model setiap post memiliki satu author 
        public function author(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }

        public function category(): BelongsTo
        {
            return $this->belongsTo(Category::class);
        }
}
