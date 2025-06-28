<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;
    protected $table = 'tb_pengurus';
    protected $fillable = [
        'nama', 'jabatan', 'foto', 'periode'
    ];

    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'id_divisi');
    }
}
