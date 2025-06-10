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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->uuid('artikel_uuid');
            $table->string('artikel_kode');
            $table->string('artikel_kategori_kode');
            $table->string('artikel_judul');
            $table->string('artikel_slug');
            $table->text('artikel_deskripsi');
            $table->string('artikel_foto')->nullable();
            $table->string('artikel_tag');
            $table->string('artikel_author');
            $table->date('artikel_tanggal');
            $table->enum('artikel_status', ['Public', 'Private']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
