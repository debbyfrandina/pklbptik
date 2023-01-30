<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laporans')->insert([
            [
                'nama' => 'Program ABC',
                'tujuan' => 'Pelatihan ABC pada DEF',
                'outcome' => 'Surat perintah tugas pelatihan ABC',
                'jumlah' => '3',
                'file_admin' => 'file',
                'user_id' => '1',
            ],
        ]);
    }
}
