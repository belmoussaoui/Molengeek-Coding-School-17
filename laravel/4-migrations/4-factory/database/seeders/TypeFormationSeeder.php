<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeFormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_formations')->insert([
            'nom' => 'formation type 1',
            'created_at' => now()
        ]);
        DB::table('type_formations')->insert([
            'nom' => 'formation type 2',
            'created_at' => now()
        ]);
        DB::table('type_formations')->insert([
            'nom' => 'formation type 3',
            'created_at' => now()
        ]);
        DB::table('type_formations')->insert([
            'nom' => 'formation type 4',
            'created_at' => now()
        ]);
        DB::table('type_formations')->insert([
            'nom' => 'formation type 5',
            'created_at' => now()
        ]);
        DB::table('type_formations')->insert([
            'nom' => 'formation type 6',
            'created_at' => now()
        ]);
        DB::table('type_formations')->insert([
            'nom' => 'formation type 7',
            'created_at' => now()
        ]);
        DB::table('type_formations')->insert([
            'nom' => 'formation type 8',
            'created_at' => now()
        ]);
        DB::table('type_formations')->insert([
            'nom' => 'formation type 9',
            'created_at' => now()
        ]);
        DB::table('type_formations')->insert([
            'nom' => 'formation type 10',
            'created_at' => now()
        ]);
    }
}
