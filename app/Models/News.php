<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news'; // Nama tabel di database

    protected $fillable = [
        'title', 'content', 'author', 'published_at'
    ];
}
