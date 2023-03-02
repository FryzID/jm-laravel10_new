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
        Schema::create('nilai_teknis', function (Blueprint $table) {
            $table->id('nilai_teknis_id');
            $table->unsignedBigInteger('siswapkl_id');
            $table->unsignedBigInteger('aspek_penilaian_teknis_id');
            $table->integer('nilai');
            $table->timestamps();

            $table->foreign('siswapkl_id')->references('siswapkl_id')->on('siswa_pkls');
            $table->foreign('aspek_penilaian_teknis_id')->references('aspek_penilaian_teknis_id')->on('aspek_penilaian_teknis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_teknis');
    }
};
