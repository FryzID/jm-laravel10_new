<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GuruSeeder::class,
            SiswaSeeder::class,
            HumasSeeder::class,
            JurusanSeeder::class,
            DudiSeeder::class,
            KelasSeeder::class,
            TapelSeeder::class,
            KelasSiswaSeeder::class,
            SiswaPklSeeder::class,
        ]);
    }
}
