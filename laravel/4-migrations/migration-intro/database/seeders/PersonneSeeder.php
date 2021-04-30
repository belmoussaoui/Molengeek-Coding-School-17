<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("personnes")->insert([
            "name" => "Elias",
            "age" => 25,
            "ddn" => "1996-04-26",
            "created_at" => now()
        ]);
    }
}
