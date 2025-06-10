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
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->id();
            $table->uuid('perusahaan_uuid');
            $table->string('perusahaan_kode');
            $table->string('perusahaan_nama');
            $table->string('perusahaan_alamat');
            $table->string('perusahaan_email');
            $table->string('perusahaan_telepon');
            $table->string('perusahaan_hp');
            $table->string('perusahaan_atas_nama');
            $table->string('perusahaan_an_hp');
            $table->string('perusahaan_user_kode');
            $table->string('perusahaan_nama_pic');
            $table->string('perusahaan_email_pic');
            $table->string('perusahaan_hp_pic');
            $table->string('perusahaan_tgl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaans');
    }
};
