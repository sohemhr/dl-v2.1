<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Includelist extends Model
{
    /** @use HasFactory<\Database\Factories\IncludelistFactory> */
    use HasFactory;
    protected $table = 'include_lists';
    protected $fillable = [
        'il_uuid',
        'il_id',
        'il_nama',
    ];
}
