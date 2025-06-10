<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checking extends Model
{
    /** @use HasFactory<\Database\Factories\CheckingFactory> */
    use HasFactory;
    protected $fillable = [
        'chk_uuid',
        'chk_nama_perusahaan',
        'chk_nama',
        'chk_email',
        'chk_hp',
        'chk_status',
    ];
}
