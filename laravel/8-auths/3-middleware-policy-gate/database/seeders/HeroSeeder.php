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
        DB::table('heros')->insert([
            "title"=>"Bettter Digital Experience With Techie",
            "description"=>"We are team of talented designers making websites with Bootstrap",
            "button"=>"Get Started",
            "image"=>"hero-img.png"
        ]);
    }
}