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
                'nama' => 'Hani',
                'email' => 'hani@gmail.com',
                'password' => bcrypt('123'),
                'jabatan_id' => '1'
            ],
            // [
            //     'email' => 'hani@gmail.com'
            // ],
            // [
            //     'password' => 'ppppp'
            // ],
            // [
            //     'jabatan_id' => '1'
            // ],
        ]);
    }
}
