<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            'title' => 'GET IN THE LAB AND DISCOVER THE WORLD',
            'image' => 'device.png',
            'button' => 'Browse',
            'button_href' => '#contact'
        ]);
    }
}
