<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nama' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123'),
                'jabatan_id' => '1'
            ],
            [
                'nama' => 'pengembangan',
                'email' => 'pengembangan@gmail.com',
                'password' => bcrypt('123'),
                'jabatan_id' => '2'
            ],
            [
                'nama' => 'pemberdayaan',
                'email' => 'pemberdayaan@gmail.com',
                'password' => bcrypt('123'),
                'jabatan_id' => '3'
            ],
            [
                'nama' => 'pimpinan',
                'email' => 'pimpinan@gmail.com',
                'password' => bcrypt('123'),
                'jabatan_id' => '4'
            ],
        ]);
    }
}
