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
        Schema::create('pph_calculations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->integer('tahun_pajak');
            $table->bigInteger('total_penghasilan');
            $table->bigInteger('ptkp');
            $table->bigInteger('penghasilan_kena_pajak');
            $table->bigInteger('pph_terutang');
            $table->enum('status', ['pra_isi', 'dikonfirmasi', 'dikoreksi', 'koreksi_ditolak'])->default('pra_isi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pph_calculations');
    }
};
