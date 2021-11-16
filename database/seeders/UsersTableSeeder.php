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
                'name' => "tester user ",
                'username' => 'testerrrrrrrr',
                'role' => '0',
                'email' => 'tester@gmail.com',
                'password' => '11111111'
            ],
            [
                'name' => "tester admin",
                'username' => 'adminnnnn',
                'role' => '1',
                'email' => 'admin@gmail.com',
                'password' => '11111111'
                ]
            ];


            foreach ($users as $users) {
                User::create($users);
            }
    }
}
