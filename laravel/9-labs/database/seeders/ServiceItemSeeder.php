<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_items')->insert([
            'name' => 'Get in the lab',
            'icon' => 'flaticon-023-flask',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'service_id' => 1
        ]);
        DB::table('service_items')->insert([
            'name' => 'Projects Online',
            'icon' => 'flaticon-011-compass',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'service_id' => 1
        ]);
        DB::table('service_items')->insert([
            'name' => 'Smart Marketing',
            'icon' => 'flaticon-037-idea',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'service_id' => 1
        ]);
        DB::table('service_items')->insert([
            'name' => 'Social Media',
            'icon' => 'flaticon-039-vector',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'service_id' => 1
        ]);
        DB::table('service_items')->insert([
            'name' => 'Brainstorming',
            'icon' => 'flaticon-036-brainstorming',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'service_id' => 1
        ]);
        DB::table('service_items')->insert([
            'name' => 'Documented',
            'icon' => 'flaticon-026-search',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'service_id' => 1
        ]);
        DB::table('service_items')->insert([
            'name' => 'Responsive',
            'icon' => 'flaticon-018-laptop-1',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'service_id' => 1
        ]);
        DB::table('service_items')->insert([
            'name' => 'Retina Ready',
            'icon' => 'flaticon-043-sketch',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'service_id' => 1
        ]);
        DB::table('service_items')->insert([
            'name' => 'Ultra Modern',
            'icon' => 'flaticon-012-cube',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'service_id' => 1
        ]);
    }
}
