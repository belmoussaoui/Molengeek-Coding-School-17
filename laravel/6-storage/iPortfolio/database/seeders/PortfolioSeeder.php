<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'image' => 'portfolio-1.jpg',
            'category' => 'app',
            'created_at' => now()
        ]);
        DB::table('portfolios')->insert([
            'image' => 'portfolio-1.jpg',
            'category' => 'app',
            'created_at' => now()
        ]);
        DB::table('portfolios')->insert([
            'image' => 'portfolio-1.jpg',
            'category' => 'app',
            'created_at' => now()
        ]);
        DB::table('portfolios')->insert([
            'image' => 'portfolio-1.jpg',
            'category' => 'app',
            'created_at' => now()
        ]);
    }
}
