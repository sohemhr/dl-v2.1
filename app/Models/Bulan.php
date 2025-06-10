<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulan extends Model
{
    /** @use HasFactory<\Database\Factories\BulanFactory> */
    use HasFactory;
    protected $table = 'bulans';
    protected $fillable = [
        'bulan_list',
    ];
}
