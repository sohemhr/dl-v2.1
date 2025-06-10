<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Akseslevel extends Model
{
    /** @use HasFactory<\Database\Factories\AkseslevelFactory> */
    use HasFactory;
    protected $table = 'akses_levels';
    protected $fillable = [
        'akses_id',
        'akses_level',
    ];

    static function getLevelFilter() 
    {
        $akses = DB::table('akses_levels')->where('akses_id', '>', 202500 )->get();
        
        return  $akses;
    }
}
