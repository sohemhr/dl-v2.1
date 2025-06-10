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
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->uuid('layanan_uuid');
            $table->string('layanan_kode');
            $table->string('layanan_nama');
            $table->string('layanan_slug')->unique();
            $table->string('layanan_harga');
            $table->text('layanan_desk');
            $table->enum('layanan_status',['Public','Private']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};
