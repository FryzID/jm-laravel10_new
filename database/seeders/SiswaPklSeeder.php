<?php

namespace Database\Seeders;

use App\Models\SiswaPkl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaPklSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiswaPkl::create([
            'dudi_id' => '1',
            'kelassiswa_id' => '1',
            'guru_id' => '1',
        ]);
    }
}
