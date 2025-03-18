<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Laporan extends Model
{
    protected $fillable = [
        'jumlah_dipinjam',
        'periode'
    ];
    public function buku(): BelongsTo
    {
                return $this->belongsTo(Buku::class);
    }
}