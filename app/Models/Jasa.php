<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Jasa extends Model
{
    protected $fillable = [
        'id_kategori',
        'penjasa_id',
        'detail_id',
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function penjasa(): BelongsTo
    {
        return $this->belongsTo(User::class, 'penjasa_id');
    }

    public function detailJasa(): HasOne
    {
        return $this->hasOne(DetailJasa::class, 'id');
    }
}
