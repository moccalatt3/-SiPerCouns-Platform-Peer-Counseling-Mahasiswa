<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'admin'; // Nama tabel
    protected $primaryKey = 'id_admin'; // Primary key

    // Kolom yang bisa diisi
    protected $fillable = [
        'username', 'password',
    ];

    // Menggunakan kolom password untuk autentikasi
    protected $hidden = [
        'password',
    ];
}
