<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataPemberdayaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_pemberdayaans')->insert([
            [
                'nama_program' => 'Pelatihan Sistem ABC kepada Siswa SMA di kabupaten Semarang',
                'tujuan' => 'Memberikan sosialisasi pemanfaatan TIK Sistem Informasi ABC kepada murid SMA kabupaten Semarang',
                'outcome' => 'Murid SMA yang mendapat pelatihan dapat mengimplementasi pemanfaatan TIK pada pembelajaran',
                'tanggal_pelaksanaan' => '2023-01-24',
                'tempat_pelaksanaan' => 'SMAN 1 Kabupaten Semarang',
                'jumlah_peserta' => '1000',
                'jumlah_sekolah' => '15',
            ],
        ]);
    }
}
