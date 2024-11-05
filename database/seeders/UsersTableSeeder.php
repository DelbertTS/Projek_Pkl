<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'nama' => 'Admin User',
                'username' => 'admin',
                'password' => Hash::make('password'),
                'level' => 'admin'
            ],
            [
                'nama' => 'Guest User',
                'username' => 'guest',
                'password' => Hash::make('password'),
                'level' => 'guest'
            ]
        ]);
    }
}
