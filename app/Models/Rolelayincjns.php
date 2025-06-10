<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rolelayincjns extends Model
{
    /** @use HasFactory<\Database\Factories\RolelayincjnsFactory> */
    use HasFactory;
    protected $table = 'role_layincjns';
    protected $fillable = [
        'rlij_kode',
        'rlij_jenis_kode',
        'rlij_rli_kode',
        'rlij_inc_id',
        'rlij_status',
        'rlij_no_urut',
    ];
}
