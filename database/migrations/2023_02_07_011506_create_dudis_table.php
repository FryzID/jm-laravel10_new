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
        Schema::create('dudis', function (Blueprint $table) {
            $table->id('dudi_id');
            $table->integer('kode_dudi')->unique();
            $table->string('nama_dudi');
            $table->string('username');
            $table->string('password');
            $table->text('alamat');
            $table->integer('telepon');
            $table->unsignedBigInteger('jurusan_id');
            $table->string('level');
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
        Schema::dropIfExists('dudis');
    }
};
