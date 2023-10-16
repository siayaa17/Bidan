<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbl_janji_temu', function (Blueprint $table) {
            $table->id('id_janji_temu');
            $table->integer('id_pasien');
            $table->integer('id_bidan');
            $table->date('tanggal_waktu');
            $table->string('status')->nullable;
            $table->string('keluhan')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_janji_temu');
    }
};
