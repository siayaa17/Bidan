<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_pasienkb', function (Blueprint $table) {
            $table->id('id_pasien');
            $table->string('nama_pasien_kb')->nullable;
            $table->date('tanggal_lahir');
            $table->string('alamat')->nullable;
            $table->integer('nomor_telepon')->nullable;
            $table->string('nama_pasangan')->nullable;
            $table->string('jumlah_anak')->nullable;
            $table->string('rekamedis')->nullable;
            $table->string('pemeriksaan_kesehatan')->nullable;
            $table->string('riwayat_kb')->nullable;
            $table->dateTime('tanggal_datang');
            $table->dateTime('tanggal_kembali');
            $table->string('catatan_dokumentasi')->nullable;

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pasienkb');
    }
};
