<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\JabatanSeeder;
use Database\Seeders\LaporanSeeder;
use Database\Seeders\DataPengembanganSeeder;
use Database\Seeders\DataPemberdayaanSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([JabatanSeeder::class, LaporanSeeder::class, UserSeeder::class, DataPengembanganSeeder::class, DataPemberdayaanSeeder::class]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
