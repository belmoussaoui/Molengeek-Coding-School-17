<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaracteristiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("caracteristiques")->insert([
            "icone"=>"",
            "chiffre"=>"",
            "nom"=>"",
            "created_at"=>now()
        ]);  
    }
}
