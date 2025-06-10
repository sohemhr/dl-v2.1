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
        Schema::create('checkings', function (Blueprint $table) {
            $table->id();
            $table->uuid('chk_uuid');
            $table->string('chk_nama_perusahaan');
            $table->string('chk_nama');
            $table->string('chk_email');
            $table->string('chk_hp');
            $table->enum('chk_status', ['0', '1']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkings');
    }
};
