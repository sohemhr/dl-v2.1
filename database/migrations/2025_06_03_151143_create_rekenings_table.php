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
        Schema::create('rekenings', function (Blueprint $table) {
            $table->id();
            $table->uuid('rekening_uuid');
            $table->string('rekening_kode');
            $table->string('rekening_nama');
            $table->string('rekening_nomor');
            $table->string('rekening_atas_nama');
            $table->string('rekening_swiftcode');
            $table->enum('rekening_kategori', ['PPN', 'Non PPN', 'Perpajakan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekenings');
    }
};
