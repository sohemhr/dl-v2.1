<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    /** @use HasFactory<\Database\Factories\JenisFactory> */
    use HasFactory;
    protected $fillable = [
        'jenis_uuid',
        'jenis_kode',
        'jenis_layanan_kode',
        'jenis_nama',
        'jenis_slug',
        'jenis_harga',
        'jenis_diskon',
        'jenis_final',
        'jenis_desk',
        'jenis_status',
    ];

}
