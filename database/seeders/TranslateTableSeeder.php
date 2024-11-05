<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TranslateTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('translate')->insert([
            ['jepang_id' => 1, 'indonesia_id' => 1],  // こんにちは -> Halo
            ['jepang_id' => 2, 'indonesia_id' => 2]   // ありがとう -> Terima kasih
        ]);
    }
}
