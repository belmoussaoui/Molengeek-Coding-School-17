<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            'nom' => 'formation A',
            'description' => 'description A',
            'created_at' => now()
        ]);
        DB::table('formations')->insert([
            'nom' => 'formation B',
            'description' => 'description B',
            'created_at' => now()
        ]);
        DB::table('formations')->insert([
            'nom' => 'formation C',
            'description' => 'description C',
            'created_at' => now()
        ]);
        DB::table('formations')->insert([
            'nom' => 'formation D',
            'description' => 'description D',
            'created_at' => now()
        ]);
        DB::table('formations')->insert([
            'nom' => 'formation E',
            'description' => 'description E',
            'created_at' => now()
        ]);
        DB::table('formations')->insert([
            'nom' => 'formation F',
            'description' => 'description F',
            'created_at' => now()
        ]);
    }
}
