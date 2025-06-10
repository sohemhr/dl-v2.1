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
        Schema::create('transaksi_details', function (Blueprint $table) {
            $table->id();
            $table->uuid('trxdtl_uuid');
            $table->string('trxdtl_kode');
            $table->string('trxdtl_trx_kode');
            $table->string('trxdtl_perusahaan_kode');
            $table->string('trxdtl_user_kode');
            $table->string('trxdtl_layanan_kode');
            $table->string('trxdtl_jenis_kode');
            $table->enum('trxdtl_status',['Start','OnProcess','Pending','Completed']);
            $table->text('trxdtl_notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_details');
    }
};
