<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'tb_berita';
    protected $fillable = [
        'judul', 'slug', 'isi', 'thumbnail', 'kategori', 'penulis', 'status', 'published_at'
    ];
}
