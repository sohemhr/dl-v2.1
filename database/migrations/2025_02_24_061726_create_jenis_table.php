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
        Schema::create('jenis', function (Blueprint $table) {
            $table->id();
            $table->uuid('jenis_uuid');
            $table->string('jenis_kode');
            $table->string('jenis_layanan_kode');
            $table->string('jenis_nama');
            $table->string('jenis_slug')->unique();
            $table->string('jenis_harga');
            $table->string('jenis_diskon');
            $table->string('jenis_final');
            $table->text('jenis_desk');
            $table->enum('jenis_status',['Public','Private']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis');
    }
};
