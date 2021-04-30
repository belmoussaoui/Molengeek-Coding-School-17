<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BibliothequeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("bibliotheques")->insert([
            "nom" => "bibliotheque 1",
            "description" => "description 1",
            "created_at" => now()
        ]);
        DB::table("bibliotheques")->insert([
            "nom" => "bibliotheque 2",
            "description" => "description 2",
            "created_at" => now()
        ]);
        DB::table("bibliotheques")->insert([
            "nom" => "bibliotheque 3",
            "description" => "description 3",
            "created_at" => now()
        ]);
    }
}
