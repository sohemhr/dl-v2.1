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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->uuid('pembayaran_uuid');
            $table->string('pembayaran_kode');
            $table->string('pembayaran_perusahaan_kode');
            $table->string('pembayaran_trx_kode');
            $table->text('pembayaran_rincian');
            $table->string('pembayaran_jumlah');
            $table->enum('pembayaran_metode', ['Cash', 'Transfer']);
            $table->string('pembayaran_penyetor');
            $table->string('pembayaran_penyetor_hp');
            $table->string('pembayaran_penerima');
            $table->text('pembayaran_keterangan');
            $table->string('pembayaran_tanggal');
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
