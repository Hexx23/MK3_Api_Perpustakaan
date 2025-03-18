<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peminjaman extends Model
{
    protected $fillable = [
        'tgl_peminjaman',
        'tgl_pengembalian'
    ];
    public function buku(): BelongsTo
    {
                return $this->belongsTo(related: Peminjaman::class);
    }
}