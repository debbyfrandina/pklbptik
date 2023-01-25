<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataPengembanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pengembangans')->insert([
            [
                'nama_program' => 'Program Pengelolaan Pendidikan',
                'nama_kegiatan' => 'Pengelolan Pendidikan SMK',
                'nama_sub_kegiatan' => 'Pengadaan Alat & Peraga Siswa',
                'nama_sub_sub_kegiatan' => '-Aplikasi prototype media pembelajaran berbasis edugame -Vodcast berbagi',
                'tanggal_pelaksanaan' => '01/01/23 - 01/07/23',
                'tempat_pelaksanaan' => 'SMK N Tunas Bangsa Magelang',
                'jumlah_peserta' => '1000',
                'jumlah_produk' => '3',
            ],
        ]);
    }
}
