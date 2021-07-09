<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('headers')->insert([
            'logo' => 'logo.png',
            'item1' => 'Home',
            'item2' => 'Services',
            'item3' => 'Blog',
            'item4' => 'Contact',
        ]);
    }
}
