<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran_himpunan extends Model
{
    use HasFactory;
    protected $table = 'tb_pendaftaran_himpunan';
    protected $fillable = [
        'nama', 'motivasi', 'divisi_pilihan', 'status_seleksi', 'tanggal_daftar'
    ];




    
    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'id_divisi');
    }
}
