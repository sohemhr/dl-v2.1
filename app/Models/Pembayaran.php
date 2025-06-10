<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    /** @use HasFactory<\Database\Factories\PembayaranFactory> */
    use HasFactory;
    protected $fillable = [
        'pembayaran_uuid',
        'pembayaran_kode',
        'pembayaran_perusahaan_kode',
        'pembayaran_trx_kode',
        'pembayaran_rincian',
        'pembayaran_jumlah',
        'pembayaran_metode',
        'pembayaran_penyetor',
        'pembayaran_penyetor_hp',
        'pembayaran_penerima',
        'pembayaran_keterangan',
        'pembayaran_tanggal',
        'created_by',
        'updated_by',
    ];
}
