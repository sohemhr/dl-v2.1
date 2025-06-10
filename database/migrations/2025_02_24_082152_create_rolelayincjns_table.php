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
        Schema::create('role_layincjns', function (Blueprint $table) {
            $table->id();
            $table->string('rlij_kode');
            $table->string('rlij_jenis_kode');
            $table->string('rlij_rli_kode');
            $table->string('rlij_inc_id');
            $table->enum('rlij_status',['Yes','No']);
            $table->string('rlij_no_urut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_layincjns');
    }
};
