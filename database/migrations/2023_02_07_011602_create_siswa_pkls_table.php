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
        Schema::create('siswa_pkls', function (Blueprint $table) {
            $table->id('siswapkl_id');
            $table->unsignedBigInteger('dudi_id');
            $table->unsignedBigInteger('kelassiswa_id');
            $table->unsignedBigInteger('guru_id');
            $table->timestamps();

            $table->foreign('dudi_id')->references('dudi_id')->on('dudis');
            $table->foreign('kelassiswa_id')->references('kelassiswa_id')->on('kelas_siswas');
            $table->foreign('guru_id')->references('guru_id')->on('gurus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa_pkls');
    }
};
