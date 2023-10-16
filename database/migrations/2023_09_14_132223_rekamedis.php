<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_rekamedis', function (Blueprint $table) {
            $table->id('id_rekamedis');
            $table->string('id_pasien')->nullable;
            $table->string('riwayat_penyakit')->nullable;
            $table->date('diagnosa');
            $table->string('rekomendasi_pengobatan')->nullable;
            $table->string('tanggal_pemeriksaan')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_rekamedis');
    }
};
