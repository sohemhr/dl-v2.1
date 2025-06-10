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
        Schema::create('promos', function (Blueprint $table) {
            $table->id();
            $table->uuid('promo_uuid');
            $table->string('promo_kode');
            $table->string('promo_judul');
            $table->string('promo_slug');
            $table->text('promo_deskripsi');
            $table->string('promo_foto')->nullable();
            $table->string('promo_author');
            $table->date('promo_tanggal_mulai');
            $table->date('promo_tanggal_selesai');
            $table->enum('promo_status', ['Public', 'Private']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promos');
    }
};
