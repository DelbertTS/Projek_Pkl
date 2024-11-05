<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JepangTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('jepang')->insert([
            ['kata' => 'こんにちは', 'arti' => 'Hello'],
            ['kata' => 'ありがとう', 'arti' => 'Thank you']
        ]);
    }
}
