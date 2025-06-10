<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    /** @use HasFactory<\Database\Factories\RekeningFactory> */
    use HasFactory;
    protected $fillable = [
        'rekening_uuid',
        'rekening_kode',
        'rekening_nama',
        'rekening_nomor',
        'rekening_atas_nama',
        'rekening_swiftcode',
        'rekening_kategori',
    ];
}
