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
        Schema::create('contact_nomors', function (Blueprint $table) {
            $table->id();
            $table->uuid('cn_uuid');
            $table->string('cn_office_kode');
            $table->string('cn_nama');
            $table->string('cn_hp');
            $table->string('cn_foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_nomors');
    }
};
