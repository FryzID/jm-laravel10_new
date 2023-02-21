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
        Schema::create('kelas_siswas', function (Blueprint $table) {
            $table->id('kelassiswa_id');
            $table->unsignedBigInteger('kelas_id');
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('tapel_id');
            $table->timestamps();

            $table->foreign('kelas_id')->references('kelas_id')->on('kelas');
            $table->foreign('siswa_id')->references('siswa_id')->on('siswas');
            $table->foreign('tapel_id')->references('tapel_id')->on('tapels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas_siswas');
    }
};
