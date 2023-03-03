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
        Schema::create('aspek_penilaian_teknis', function (Blueprint $table) {
            $table->id('aspek_penilaian_teknis_id');
            $table->string('aspek_penilaian');
            $table->unsignedBigInteger('dudi_id');
            $table->timestamps();

            $table->foreign('dudi_id')->references('dudi_id')->on('dudis');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspek_penilaian_teknis');
    }
};
