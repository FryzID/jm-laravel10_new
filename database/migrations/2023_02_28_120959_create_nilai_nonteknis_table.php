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
        Schema::create('nilai_nonteknis', function (Blueprint $table) {
            $table->id('nilai_nonteknis_id');
            $table->unsignedBigInteger('siswapkl_id');
            $table->integer('nilai1');
            $table->integer('nilai2');
            $table->integer('nilai3');
            $table->integer('nilai4');
            $table->integer('nilai5');
            $table->timestamps();

            $table->foreign('siswapkl_id')->references('siswapkl_id')->on('siswa_pkls');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_nonteknis');
    }
};
