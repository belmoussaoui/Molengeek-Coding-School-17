<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'logo' => 'icofont-computer',
            'title' => 'Lorem Ipsum',
            'text' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
            'created_at' => now()
        ]);
        DB::table('services')->insert([
            'logo' => 'icofont-computer',
            'title' => 'Lorem Ipsum',
            'text' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
            'created_at' => now()
        ]);
        DB::table('services')->insert([
            'logo' => 'icofont-computer',
            'title' => 'Lorem Ipsum',
            'text' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
            'created_at' => now()
        ]);
        DB::table('services')->insert([
            'logo' => 'icofont-computer',
            'title' => 'Lorem Ipsum',
            'text' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
            'created_at' => now()
        ]);
        DB::table('services')->insert([
            'logo' => 'icofont-computer',
            'title' => 'Lorem Ipsum',
            'text' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
            'created_at' => now()
        ]);
        DB::table('services')->insert([
            'logo' => 'icofont-computer',
            'title' => 'Lorem Ipsum',
            'text' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident',
            'created_at' => now()
        ]);
    }
}
