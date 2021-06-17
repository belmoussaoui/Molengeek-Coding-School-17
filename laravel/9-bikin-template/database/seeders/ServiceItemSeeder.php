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
            'title' => 'Lorem Ipsum',
            'description' => 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi',
            'icon' => 'bxl-dribbble',
            'service_id' => 1,
        ]);
        DB::table('service_items')->insert([
            'title' => 'Sed ut perspiciatis',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore',
            'icon' => 'bx-file',
            'service_id' => 1,
        ]);
        DB::table('service_items')->insert([
            'title' => 'Magni Dolores',
            'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia',
            'icon' => 'bx-tachometer',
            'service_id' => 1,
        ]);
        DB::table('service_items')->insert([
            'title' => 'Nemo Enim',
            'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis',
            'icon' => 'bx-layer',
            'service_id' => 1,
        ]);
    }
}
