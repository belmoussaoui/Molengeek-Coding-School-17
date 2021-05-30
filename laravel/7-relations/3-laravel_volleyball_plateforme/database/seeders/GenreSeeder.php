<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'type' => 'Homme'
        ]);
        DB::table('genres')->insert([
            'type' => 'Femme'
        ]);
        DB::table('genres')->insert([
            'type' => 'Non Binaire'
        ]);
    }
}
