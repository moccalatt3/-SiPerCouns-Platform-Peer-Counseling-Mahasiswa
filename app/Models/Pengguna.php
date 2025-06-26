<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengguna extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna'; // Tentukan primary key secara eksplisit

    protected $fillable = [
        'name', 'email', 'username', 'password', 'img_pengguna', 'about', 'city',
    ];
    

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
