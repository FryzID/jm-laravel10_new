<?php

namespace Database\Seeders;

use App\Models\Humas;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class HumasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Humas::create([
            'nip' => '111',
            'username' => 'Humas1',
            'nama_humas' => 'super@gmail.com',
            'level' => 'Humas',
            'password' => Hash::make('123'),
        ]);
        Humas::create([
            'nip' => '112',
            'username' => 'Humas2',
            'nama_humas' => 'admin1@gmail.com',
            'level' => 'Humas',
            'password' => Hash::make('123'),
        ]);
        Humas::create([
            'nip' => '113',
            'username' => 'Humas3',
            'nama_humas' => 'admin2@gmail.com',
            'level' => 'Humas',
            'password' => Hash::make('123')
        ]);
    }
}
