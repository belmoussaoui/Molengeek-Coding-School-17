<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('voitures')->insert([
            "nom" => "voiture 1",
            "description" => "description 1",
            "ddf" => "2008-10-23",
            "model" => "model 1",
            "nds" => 1234567891
        ]);
        DB::table('voitures')->insert([
            "nom" => "voiture 2",
            "description" => "description 2",
            "ddf" => "2008-10-23",
            "model" => "model 2",
            "nds" => 1234567892
        ]);
        DB::table('voitures')->insert([
            "nom" => "voiture 3",
            "description" => "description 3",
            "ddf" => "2008-10-23",
            "model" => "model 3",
            "nds" => 1234567893
        ]);
        DB::table('voitures')->insert([
            "nom" => "voiture 4",
            "description" => "description 4",
            "ddf" => "2008-10-23",
            "model" => "model 4",
            "nds" => 1234567894
        ]);
        DB::table('voitures')->insert([
            "nom" => "voiture 5",
            "description" => "description 5",
            "ddf" => "2008-10-23",
            "model" => "model 5",
            "nds" => 1234567895
        ]);
    }
}
