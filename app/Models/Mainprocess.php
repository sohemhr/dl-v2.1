<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mainprocess extends Model
{
    protected $table = 'transaksi_details';
    protected $fillable = [
        'trxdtl_uuid',
        'trxdtl_kode',
        'trxdtl_trx_kode',
        'trxdtl_perusahaan_kode',
        'trxdtl_user_kode',
        'trxdtl_layanan_kode',
        'trxdtl_jenis_kode',
        'trxdtl_status',
    ];
}
