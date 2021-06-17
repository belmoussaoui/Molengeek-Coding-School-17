<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            'image' => 'portfolio-1.jpg',
            'category' => 'app',
            'portfolio_id' => 1
        ]);
        DB::table('cards')->insert([
            'image' => 'portfolio-2.jpg',
            'category' => 'web',
            'portfolio_id' => 1
        ]);
        DB::table('cards')->insert([
            'image' => 'portfolio-3.jpg',
            'category' => 'app',
            'portfolio_id' => 1
        ]);
        DB::table('cards')->insert([
            'image' => 'portfolio-4.jpg',
            'category' => 'card',
            'portfolio_id' => 1
        ]);
        DB::table('cards')->insert([
            'image' => 'portfolio-5.jpg',
            'category' => 'web',
            'portfolio_id' => 1
        ]);
        DB::table('cards')->insert([
            'image' => 'portfolio-6.jpg',
            'category' => 'app',
            'portfolio_id' => 1
        ]);
        DB::table('cards')->insert([
            'image' => 'portfolio-7.jpg',
            'category' => 'card',
            'portfolio_id' => 1
        ]);
        DB::table('cards')->insert([
            'image' => 'portfolio-8.jpg',
            'category' => 'card',
            'portfolio_id' => 1
        ]);
        DB::table('cards')->insert([
            'image' => 'portfolio-9.jpg',
            'category' => 'web',
            'portfolio_id' => 1
        ]);
    }
}
