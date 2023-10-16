<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_bidan', function (Blueprint $table) {
            $table->id('id_bidan');
            $table->string('nama')->nullable;
            $table->string('spesialis')->nullable;
            $table->string('jenis_kelamin')->nullable;
            $table->string('riwayat_medis')->nullable;
            $table->string('alamat')->nullable;
            $table->integer('nomor_telepon')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_bidan');
    }
};