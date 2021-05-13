<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'language' => 'html',
            'value' => 100,
            'created_at' => now()
        ]);
        DB::table('skills')->insert([
            'language' => 'html',
            'value' => 100,
            'created_at' => now()
        ]);
        DB::table('skills')->insert([
            'language' => 'html',
            'value' => 100,
            'created_at' => now()
        ]);
        DB::table('skills')->insert([
            'language' => 'html',
            'value' => 100,
            'created_at' => now()
        ]);
        DB::table('skills')->insert([
            'language' => 'html',
            'value' => 100,
            'created_at' => now()
        ]);
        DB::table('skills')->insert([
            'language' => 'html',
            'value' => 100,
            'created_at' => now()
        ]);
    }
}
