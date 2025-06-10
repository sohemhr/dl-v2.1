<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trxtransitedit extends Model
{
    /** @use HasFactory<\Database\Factories\TrxtransiteditFactory> */
    use HasFactory;
    protected $table = 'trx_transit_edit';
    protected $fillable = [
        'trxedit_uuid',
        'trxedit_transaksi_kode',
        'trxedit_perusahaan_kode',
        'trxedit_jenis_kode',
    ];
}
