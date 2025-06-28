<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $table = "tb_divisi";
    protected $fillable = [
        'nama_divisi', 'deskripsi'
    ];

    public function pengurus()
    {
        return $this->hasMany(Pengurus::class, 'id_pengurus');
    }

     public function p_himpunan()
    {
        return $this->hasMany(Pendaftaran_himpunan::class, 'id_pendaftaran');
    }
}
