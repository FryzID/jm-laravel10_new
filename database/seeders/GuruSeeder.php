<?php

namespace Database\Seeders;

use App\Models\Guru;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guru::create([
            'nip' => '111',
            'username' => 'guru1',
            'nama_guru' => 'super@gmail.com',
            'level' => 'Guru',
            'password' => Hash::make('123'),
        ]);
        Guru::create([
            'nip' => '112',
            'username' => 'guru2',
            'nama_guru' => 'admin1@gmail.com',
            'level' => 'Guru',
            'password' => Hash::make('123'),
        ]);
        Guru::create([
            'nip' => '113',
            'username' => 'guru3',
            'nama_guru' => 'admin2@gmail.com',
            'level' => 'Guru',
            'password' => Hash::make('123')
        ]);
    }
}
