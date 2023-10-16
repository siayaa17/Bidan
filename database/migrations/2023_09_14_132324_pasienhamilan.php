<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_pasienhamil', function (Blueprint $table) {
            $table->id('id_pasien');
            $table->string('nama_pasienhamil')->nullable;
            $table->date('tanggal_lahir');
            $table->string('alamat')->nullable;
            $table->integer('nomor_telepon')->nullable;
            $table->string('nama_pasangan')->nullable;
            $table->string('data_kehamilan')->nullable;
            $table->string('data_pemeriksaan_fisik')->nullable;
            $table->string('data_laboratorium')->nullable;
            $table->string('data_ginekologi')->nullable;
            $table->string('data_psikososial')->nullable;
            $table->string('data_perkembangan Janin')->nullable;
            $table->string('rekomendasi_dan _perencanaan')->nullable;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pasienhamil');
    }
};
