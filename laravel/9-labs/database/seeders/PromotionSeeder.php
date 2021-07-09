<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotions')->insert([
            'title' => 'Are you ready to stand out?',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.',
            'button' => 'browse',
            'button_href' => '#contact',
        ]);
    }
}
