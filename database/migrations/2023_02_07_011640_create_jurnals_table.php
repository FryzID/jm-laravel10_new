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
        Schema::create('jurnals', function (Blueprint $table) {
            $table->id('jurnal_id');
            $table->unsignedBigInteger('siswapkl_id');
            $table->date('tanggal');
            $table->time('absen_masuk');
            $table->time('absen_keluar');
            $table->string('keterangan');
            $table->text('kegiatan');
            $table->string('konfirmasi_dudi')->nullable();
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
        Schema::dropIfExists('jurnals');
    }
};
