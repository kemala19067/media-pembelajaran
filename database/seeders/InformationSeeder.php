<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Information;
class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $information = [
            [
                'about' => "Selalu ada peluang disetiap kondisi yang sulit. Bingung mulai belajar dari mana dan apa saja? Tenang! Disini kami telah menyusun strategi agar mudah dipahami alurnya",
                'profile' => 'Tugas Akhir Mata Kuliah Pemrograman Basis Data Kelompok 3',
                
                ]
            ];

            foreach ($information as $information) {
                Information::create($information);
            }
    }
}
