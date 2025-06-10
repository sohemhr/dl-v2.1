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
        Schema::create('list_proses', function (Blueprint $table) {
            $table->id();
            $table->uuid('lp_uuid');
            $table->string('lp_kode');
            $table->string('lp_nama');
            $table->string('lp_no_urut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listproses');
    }
};
