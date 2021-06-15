<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heroes')->insert([
            'section_id' => 1,
            'button' => 'Get Started',
            'image' => 'hero-img.png'
        ]);
    }
}
