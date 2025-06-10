<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    /** @use HasFactory<\Database\Factories\LayananFactory> */
    use HasFactory;
    protected $fillable = [
        'layanan_uuid',
        'layanan_kode',
        'layanan_nama',
        'layanan_slug',
        'layanan_harga',
        'layanan_desk',
        'layanan_status',
    ];
}
