<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pesan;
class PesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = [
            [
                'name' => "contoh",
                'email' => 'contoh@gmail.com',
                'subject' => 'example',
                'message' => 'ini contoh'
                ]
            ];

            foreach ($contact as $contact) {
                Pesan::create($contact);
            }
    }
}
