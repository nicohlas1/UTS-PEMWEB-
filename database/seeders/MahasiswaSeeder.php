<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID'); // Menggunakan format nama Indonesia

        for($i = 1; $i <= 15; $i++){
            Mahasiswa::create([
                'NIM' => '231100' . str_pad($i, 2, '0', STR_PAD_LEFT),
                'name' => $faker->name,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date('Y-m-d', '2005-12-31'),
                'jurusan' => 'Sistem Informasi',
                'angkatan' => '2023'
            ]);
        }
        $this->call([
            MahasiswaSeeder::class,
        ]);
    }
}