<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // User::factory(5)->create();
        $this->call(CoursesSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PesanSeeder::class);
        $this->call(InformationSeeder::class);
        $this->call(TopikKuisSeeder::class);
}
}
