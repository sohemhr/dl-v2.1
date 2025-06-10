<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactnomor extends Model
{
    /** @use HasFactory<\Database\Factories\ContactnomorFactory> */
    use HasFactory;
    protected $table = 'contact_nomors';
    protected $fillable = [
        'cn_uuid',
        'cn_office_kode',
        'cn_nama',
        'cn_hp',
        'cn_foto',
    ];
}
