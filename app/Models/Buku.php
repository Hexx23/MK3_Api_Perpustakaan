<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'bukus';
    protected $primaryKey = 'id_buku'; 
    protected $fillable = [
        'judul',
        'penulis',
        'kategori',
        'tahun_terbit',
        'status'
    ];
}