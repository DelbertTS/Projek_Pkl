<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndonesiaTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('indonesia')->insert([
            ['kata' => 'Halo', 'arti' => 'Hello'],
            ['kata' => 'Terima kasih', 'arti' => 'Thank you']
        ]);
    }
}
