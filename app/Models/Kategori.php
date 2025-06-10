<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    /** @use HasFactory<\Database\Factories\KategoriFactory> */
    use HasFactory;
    protected $fillable = [
        'kategori_uuid',
        'kategori_kode',
        'kategori_nama',
        'kategori_slug',
        'kategori_warna',
    ];
}
