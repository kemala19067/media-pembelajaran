<?php

namespace Database\Seeders;
use App\Models\Kuis;
use Illuminate\Database\Seeder;

class TopikKuisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kuis =[
        [
            'title' => 'Informatika dan Keterampilan Generik',
            'body' => 'Kuis terkait dengan materi Informatika dan Keterampilan Generik'
        ],
        [
            'title' => 'Sistem Komputer',
            'body' => 'Kuis terkait dengan materi Sistem Komputer'
        ],
        [
            'title' => 'Jaringan Komputer dan Internet',
            'body' => 'Kuis terkait dengan materi Jaringan Komputer dan Internet'
        ],
        [
            'title' => 'Algoritma dan Pemrograman',
            'body' => 'Kuis terkait dengan materi Algoritma dan Pemrograman'
        ]
    ];
        
        foreach ($kuis as $kuis) {
            Kuis::create($kuis);
        }
    }
}
