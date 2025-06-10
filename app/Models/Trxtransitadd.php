<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trxtransitadd extends Model
{
    /** @use HasFactory<\Database\Factories\TrxtransitaddFactory> */
    use HasFactory;
    protected $table = 'trx_transit_add';
    protected $fillable = [
        'trxadd_uuid',
        'trxadd_perusahaan_kode',
        'trxadd_jenis_kode',
    ];
}
