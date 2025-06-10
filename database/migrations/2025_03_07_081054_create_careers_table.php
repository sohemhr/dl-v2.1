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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->uuid('career_uuid');
            $table->string('career_kode');
            $table->string('career_judul');
            $table->string('career_slug');
            $table->text('career_deskripsi');
            $table->string('career_foto')->nullable();
            $table->string('career_author');
            $table->date('career_tanggal_mulai');
            $table->date('career_tanggal_selesai');
            $table->enum('career_status', ['Public', 'Private']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
