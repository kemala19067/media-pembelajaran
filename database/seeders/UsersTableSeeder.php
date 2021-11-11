<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => "user",
                'username' => 'user123',
                'role' => 'USR',
                'email' => 'user@gmail.com',
                'password' => bcrypt('11111')
            ],
            [
                'name' => "admin",
                'username' => 'admin123',
                'role' => 'ADM',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('11111')
                ]
            ];


            foreach ($users as $user) {
                User::create($user);
            }
    }
}
