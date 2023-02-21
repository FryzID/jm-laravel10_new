<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikats', function (Blueprint $table) {
            $table->id('sertifikat_id');
            $table->unsignedBigInteger('siswapkl_id');
            $table->string('nama_sertifikat');
            $table->text('dokumen');
            $table->timestamps();

            $table->foreign('siswapkl_id')->references('siswapkl_id')->on('siswa_pkls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sertifikats');
    }
};
