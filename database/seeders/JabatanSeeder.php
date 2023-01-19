<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jabatans')->insert([
            [
                'nama' => 'Tata Usaha'
            ],
            [
                'nama' => 'Pengembangan'
            ],
            [
                'nama' => 'Pemberdayaan'
            ],
            [
                'nama' => 'Pimpinan'
            ],
        ]);
    }
}
