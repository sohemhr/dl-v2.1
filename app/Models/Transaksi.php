<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    /** @use HasFactory<\Database\Factories\TransaksiFactory> */
    use HasFactory;
    protected $fillable = [
        'trx_uuid',
        'trx_kode',
        'trx_perusahaan_kode',
        'trx_user_kode',
        'trx_jumlah',
        'trx_diskon',
        'trx_biaya_lain',
        'trx_total_bayar',
        'trx_keterangan',
        'trx_tgl',
        'trx_status',
        'trx_status_bayar',
        'trx_rekening_kode',
    ];
}
