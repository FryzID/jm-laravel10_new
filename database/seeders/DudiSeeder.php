<?php

namespace Database\Seeders;

use App\Models\Dudi;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class DudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dudi::create([
            'kode_dudi' => '1112',
            'username' => 'dudi',
            'nama_dudi' => 'dudi',
            'level' => 'Dudi',
            'alamat' => 'dudi alamat',
            'telepon' => '1234',
            'jurusan_id' => '1',
            'password' => Hash::make('123'),
        ]);
    }
}