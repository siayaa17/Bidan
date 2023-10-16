<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_pasien', function (Blueprint $table) {
            $table->id('id_pasien');
            $table->string('id_rekamedis')->nullable;
            $table->string('nama')->nullable;
            $table->string('status')->nullable;
            $table->string('umur')->nullable;
            $table->integer('jenis_kelamin')->nullable;
            $table->string('alamat')->nullable;
            $table->string('nomor_telepon')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pasien');
    }
};