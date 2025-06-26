<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $table = 'riwayat';
    protected $primaryKey = 'id_riwayat';

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
}
