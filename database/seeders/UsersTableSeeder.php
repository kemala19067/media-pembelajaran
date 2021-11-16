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
                'role' => '0',
                'email' => 'user@gmail.com',
                'password' => 'useruser'
            ],
            [
                'name' => "admin",
                'username' => 'admin123',
                'role' => '1',
                'email' => 'admin@gmail.com',
                'password' => 'adminadmin'
                ]
            ];


            foreach ($users as $users) {
                User::create($users);
            }
    }
}
