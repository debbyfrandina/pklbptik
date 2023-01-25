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
        Schema::create('data_pemberdayaans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_program');
            $table->string('tujuan');
            $table->string('outcome');
            $table->date('tanggal_pelaksanaan');
            $table->string('tempat_pelaksanaan');
            $table->integer('jumlah_peserta');
            $table->integer('jumlah_sekolah');
            // $table->integer('berkas');
            $table->foreignId('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_pemberdayaans');
    }
};
