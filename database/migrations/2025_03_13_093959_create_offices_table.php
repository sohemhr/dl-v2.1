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
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->uuid('office_uuid');
            $table->string('office_kode');
            $table->string('office_nama');
            $table->string('office_slug');
            $table->string('office_alamat');
            $table->string('office_email');
            $table->string('office_telepon');
            $table->string('office_hp');
            $table->text('office_deskripsi');
            $table->string('office_foto')->nullable();
            $table->text('office_lokasi');
            $table->text('office_lokasi_url');
            $table->enum('office_status', ['Public', 'Private']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offices');
    }
};
