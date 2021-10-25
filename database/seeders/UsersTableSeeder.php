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
                'name' => "tester2",
                'username' => 'tester',
                'role' => 'user',
                'email' => 'tester@gmail.com',
                'password' => bcrypt('123455')
                ]
            ];

            foreach ($users as $user) {
                User::create($user);
            }
    }
}
