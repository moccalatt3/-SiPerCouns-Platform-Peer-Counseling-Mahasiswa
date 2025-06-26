<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';

    protected $fillable = [
        'id_konselor',
        'img_konselor',
        'judul',
        'topik',
        'img_artikel',
        'kategori',
        'name_konselor',
    ];

    public function konselor()
    {
        return $this->belongsTo(Konselor::class, 'id_konselor');
    }
}
