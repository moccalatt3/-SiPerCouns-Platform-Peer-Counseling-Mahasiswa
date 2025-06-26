<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $table = 'konsultasi';
    protected $primaryKey = 'id_konsultasi';

    protected $fillable = [
        'id_pengguna',
        'id_konselor',
        'nama_lengkap',
        'program_studi',
        'gender',
        'jenis_konsultasi',
        'topik_konsultasi',
        'mode_konsultasi',
        'tanggapan_konselor',
        'tanggapan_pengguna',
        'status',
        'kesan_pesan',
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna', 'id_pengguna');
    }

    public function konselor()
    {
        return $this->belongsTo(Konselor::class, 'id_konselor', 'id_konselor');
    }

    public function konsultasis()
    {
        return $this->hasMany(Konsultasi::class, 'id_pengguna', 'id_pengguna');
    }
}