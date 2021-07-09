<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ['name' => 'branding'],
            ['name' => 'identity'],
            ['name' => 'video'],
            ['name' => 'design'],
            ['name' => 'inspiration'],
            ['name' => 'web design'],
            ['name' => 'photography'],
        ]);
    }
}
