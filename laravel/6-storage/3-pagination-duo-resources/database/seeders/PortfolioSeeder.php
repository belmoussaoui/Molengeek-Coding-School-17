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
        DB::table("portfolios")->insert([
            'nom'=> 'portfolio',
            'image'=>'je vais mettre une image',
            'categorie'=>'Tu vas etre une catégo',
            'description'=>'Une description'
        ]);
        DB::table("portfolios")->insert([
            'nom'=> 'portfolio',
            'image'=>'je vais mettre une image',
            'categorie'=>'Tu vas etre une catégo',
            'description'=>'Une description'
        ]);
        DB::table("portfolios")->insert([
            'nom'=> 'portfolio',
            'image'=>'je vais mettre une image',
            'categorie'=>'Tu vas etre une catégo',
            'description'=>'Une description'
        ]);
    }
}
