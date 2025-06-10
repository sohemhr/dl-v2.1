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
        Schema::create('transaksi_detail_statuses', function (Blueprint $table) {
            $table->id();
            $table->uuid('trxdtlsts_uuid');
            $table->string('trxdtlsts_kode');
            $table->string('trxdtlsts_dtl_kode');
            $table->string('trxdtlsts_nama');
            $table->text('trxdtlsts_keterangan');
            $table->enum('trxdtlsts_status',['Start','OnProcess', 'Failed', 'Completed']);
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
        Schema::dropIfExists('transaksi_detail_statuses');
    }
};
