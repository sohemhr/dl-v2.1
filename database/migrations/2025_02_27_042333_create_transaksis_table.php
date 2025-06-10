<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->uuid('trx_uuid');
            $table->string('trx_kode');
            $table->string('trx_perusahaan_kode');
            $table->string('trx_user_kode');
            $table->string('trx_jumlah');
            $table->string('trx_diskon');
            $table->string('trx_biaya_lain'); 
            $table->string('trx_total_bayar');
            $table->string('trx_keterangan');
            $table->string('trx_tgl');
            $table->enum('trx_status',['Start','OnProcess', 'Completed']);
            $table->enum('trx_status_bayar',['Menunggu Pembayaran','DP', 'Dicicil', 'Lunas']);
            $table->string('trx_rekening_kode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
