<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counters')->insert([
            'title'=>'Clients',
            'number'=>'232',
        ]);

        DB::table('counters')->insert([
            'title'=>'Projects',
            'number'=>'521',
        ]);

        DB::table('counters')->insert([
            'title'=>'Hours Of Support',
            'number'=>'1463',
        ]);

        DB::table('counters')->insert([
            'title'=>'Hard Workers ',
            'number'=>'15',
        ]);
    }
}
