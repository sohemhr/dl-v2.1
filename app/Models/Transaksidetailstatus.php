<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksidetailstatus extends Model
{
    /** @use HasFactory<\Database\Factories\TransaksidetailstatusFactory> */
    use HasFactory;
    protected $table = 'transaksi_detail_statuses';
    protected $fillable = [
        'trxdtlsts_uuid',
        'trxdtlsts_kode',
        'trxdtlsts_dtl_kode',
        'trxdtlsts_nama',
        'trxdtlsts_keterangan',
        'trxdtlsts_status',
        'created_by',
        'updated_by',
    ];
}
