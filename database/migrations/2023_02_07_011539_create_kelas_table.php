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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id('kelas_id');
            $table->unsignedBigInteger('jurusan_id');
            $table->string('level_kelas');
            $table->string('nama_kelas');
            $table->timestamps();

            $table->foreign('jurusan_id')->references('jurusan_id')->on('jurusans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
};
