<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    /** @use HasFactory<\Database\Factories\OfficeFactory> */
    use HasFactory;
    protected $fillable = [
        'office_uuid',
        'office_kode',
        'office_nama',
        'office_slug',
        'office_alamat',
        'office_email',
        'office_telepon',
        'office_hp',
        'office_deskripsi',
        'office_foto',
        'office_lokasi',
        'office_lokasi_url',
        'office_status',
    ];

    
            
}
