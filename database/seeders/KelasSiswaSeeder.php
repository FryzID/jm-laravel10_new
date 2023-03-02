<?php

namespace Database\Seeders;

use App\Models\KelasSiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KelasSiswa::create([
            'kelas_id' => '1',
            'siswa_id' => '1',
            'tapel_id' => '1',
        ]);
    }
}
