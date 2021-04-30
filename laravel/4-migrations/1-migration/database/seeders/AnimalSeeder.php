<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("animaux")->insert([
            "nom" => "nom 1",
            "espèce" => "espèce 1",
            "age" => 15,
            "datedenaissance" => "2006-02-03"
        ]);
        DB::table("animaux")->insert([
            "nom" => "nom 2",
            "espèce" => "espèce 2",
            "age" => 15,
            "datedenaissance" => "2006-02-03"
        ]);
        DB::table("animaux")->insert([
            "nom" => "nom 3",
            "espèce" => "espèce 3",
            "age" => 15,
            "datedenaissance" => "2006-02-03"
        ]);
    }
}
