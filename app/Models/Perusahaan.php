<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    /** @use HasFactory<\Database\Factories\PerusahaanFactory> */
    use HasFactory;
    protected $fillable = [
        'perusahaan_uuid',
        'perusahaan_kode',
        'perusahaan_nama',
        'perusahaan_alamat',
        'perusahaan_email',
        'perusahaan_telepon',
        'perusahaan_hp',
        'perusahaan_atas_nama',
        'perusahaan_an_hp',
        'perusahaan_user_kode',
        'perusahaan_nama_pic',
        'perusahaan_email_pic',
        'perusahaan_hp_pic',
        'perusahaan_tgl',
    ];
}
