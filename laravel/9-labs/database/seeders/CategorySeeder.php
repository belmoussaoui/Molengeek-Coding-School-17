<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Vestibulum maximus'],
            ['name' => 'Nisi eu lobortis pharetra'],
            ['name' => 'Orci quam accumsan'],
            ['name' => 'Auguen pharetra massa'],
            ['naTellus ut nullame' => ''],
            ['name' => 'Etiam egestas viverra'],
        ]);
    }
}
