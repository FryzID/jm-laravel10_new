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
            'nip' => '123',
            'username' => 'guru',
            'nama_guru' => 'guru',
            'level' => 'Guru',
            'password' => Hash::make('123'),
        ]);
    }
}
