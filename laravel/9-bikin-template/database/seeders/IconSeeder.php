<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            'title' => 'Corporis voluptates sit',
            'description' => 'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip',
            'icon' => 'bx-receipt',
            'about_id' => 1,
        ]);
        DB::table('icons')->insert([
            'title' => 'Ullamco laboris nisi',
            'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt',
            'icon' => 'bx-cube-alt',
            'about_id' => 1,
        ]);
        DB::table('icons')->insert([
            'title' => 'Labore consequatur',
            'description' => 'Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere',
            'icon' => 'bx-images',
            'about_id' => 1,
        ]);
        DB::table('icons')->insert([
            'title' => 'Beatae veritatis',
            'description' => 'Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta',
            'icon' => 'bx-shield',
            'about_id' => 1,
        ]);
    }
}
