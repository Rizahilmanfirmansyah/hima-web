<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'tb_berita';
    protected $fillable = [
        'judul', 'slug', 'isi', 'thumbnail', 'id_kategori', 'penulis', 'status', 'published_at'
    ];



    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
