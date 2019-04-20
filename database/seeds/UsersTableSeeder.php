<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$cIKL2KW6n43fOSakX0n2cOX2CPuISX/ss04bOr/vLK9yCYsxSBdpC',
            'remember_token' => null,
            'created_at'     => '2019-04-20 21:00:54',
            'updated_at'     => '2019-04-20 21:00:54',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
