<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continents')->insert([
            'nom' => 'Europe'
            ]
        );
        DB::table('continents')->insert([
            'nom' => 'Afrique'
            ]
        );
        DB::table('continents')->insert([
            'nom' => 'Océanie'
            ]
        );
        DB::table('continents')->insert([
            'nom' => 'Asie'
            ]
        );
        DB::table('continents')->insert([
            'nom' => 'Amérique'
            ]
        );
        DB::table('continents')->insert([
            'nom' => 'Non defini'
            ]
        );
    }
}
