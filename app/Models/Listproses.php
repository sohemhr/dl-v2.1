<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listproses extends Model
{
    /** @use HasFactory<\Database\Factories\ListprosesFactory> */
    use HasFactory;
    protected $table = 'list_proses';
    protected $fillable = [
        'lp_uuid',
        'lp_kode',
        'lp_nama',
        'lp_no_urut',
    ];
}
