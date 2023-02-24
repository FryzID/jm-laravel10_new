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
            'nis' => '111',
            'username' => 'Siswa1',
            'nama_siswa' => 'super@gmail.com',
            'level' => 'Siswa',
            'password' => Hash::make('123'),
        ]);
        Siswa::create([
            'nis' => '112',
            'username' => 'Siswa2',
            'nama_siswa' => 'admin1@gmail.com',
            'level' => 'Siswa',
            'password' => Hash::make('123'),
        ]);
        Siswa::create([
            'nis' => '113',
            'username' => 'Siswa3',
            'nama_siswa' => 'admin2@gmail.com',
            'level' => 'Siswa',
            'password' => Hash::make('123')
        ]);
    }
}
