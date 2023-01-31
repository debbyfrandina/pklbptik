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
        Schema::create('data_pengembangans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_program');
            $table->string('nama_kegiatan');
            $table->string('nama_sub_kegiatan');
            $table->string('nama_sub_sub_kegiatan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('tempat_pelaksanaan');
            $table->integer('jumlah_peserta');
            $table->integer('jumlah_produk');
            $table->string('file_pengembangan');
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
        Schema::dropIfExists('data_pengembangans');
    }
};
