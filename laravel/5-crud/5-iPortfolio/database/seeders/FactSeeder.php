<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
        DB::table('facts')->insert([
            'icon' => 'icofont-simple-smile',
            'number' => 232,
            'sentence' => '<p><strong>Happy Clients</strong> consequuntur quae</p>',
            'created_at' => now()
        ]);
        DB::table('facts')->insert([
            'icon' => 'icofont-simple-smile',
            'number' => 232,
            'sentence' => '<p><strong>Happy Clients</strong> consequuntur quae</p>',
            'created_at' => now()
        ]);
        DB::table('facts')->insert([
            'icon' => 'icofont-simple-smile',
            'number' => 232,
            'sentence' => '<p><strong>Happy Clients</strong> consequuntur quae</p>',
            'created_at' => now()
        ]);
        DB::table('facts')->insert([
            'icon' => 'icofont-simple-smile',
            'number' => 232,
            'sentence' => '<p><strong>Happy Clients</strong> consequuntur quae</p>',
            'created_at' => now()
        ]);
    }
    }
}
