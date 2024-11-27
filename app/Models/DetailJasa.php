<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailJasa extends Model
{
    protected $fillable = [
        'judul',
        'deskripsi',
        'harga',
        'waktu_trip',
        'maksimal_orang',
    ];

    public function jasa(): BelongsTo
    {
        return $this->belongsTo(Jasa::class, 'detail_id');
    }
}
