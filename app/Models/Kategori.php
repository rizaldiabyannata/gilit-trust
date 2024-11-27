<?php

// app/Models/Kategori.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    protected $fillable = [
        'nama_kategori',
        'jenis_kategori',
    ];

    public function jasa(): HasMany
    {
        return $this->hasMany(Jasa::class, 'id_kategori');
    }
}
