<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hero_items')->insert([
            'image' => '01.jpg',
            'hero_id' => 1
        ]);
        DB::table('hero_items')->insert([
            'image' => '02.jpg',
            'hero_id' => 1
        ]);
    }
}
