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
            'nip' => '123',
            'username' => 'humas',
            'nama_humas' => 'humas',
            'level' => 'Humas',
            'password' => Hash::make('123'),
        ]);
    }
}
