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
        Schema::create('trx_transit_add', function (Blueprint $table) {
            $table->id();
            $table->uuid('trxadd_uuid');
            $table->string('trxadd_perusahaan_kode');
            $table->string('trxadd_jenis_kode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trx_transit_add');
    }
};
