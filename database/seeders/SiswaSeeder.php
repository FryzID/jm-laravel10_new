<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create([
            'nis' => '123',
            'username' => 'siswa',
            'nama_siswa' => 'siswa',
            'level' => 'Siswa',
            'password' => Hash::make('123'),
        ]);
    }
}
