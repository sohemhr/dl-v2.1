<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rolelayinc extends Model
{
    /** @use HasFactory<\Database\Factories\RolelayincFactory> */
    use HasFactory;
    protected $table = 'role_layincs';
    protected $fillable = [
        'rli_kode',
        'rli_lay_kode',
        'rli_inc_id',
    ];
}
