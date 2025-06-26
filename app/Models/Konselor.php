<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Konselor extends Authenticatable
{
    use SoftDeletes;

    protected $table = 'konselor';
    protected $primaryKey = 'id_konselor';

    protected $fillable = [
        'name', 'email', 'city', 'username', 'password', 'about', 'img', 'available_days', 'available_times',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function riwayat()
    {
        return $this->hasMany(Riwayat::class, 'id_konselor', 'id_konselor');
    }
}
