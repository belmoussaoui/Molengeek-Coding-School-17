<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name" => "Bilal",
            "email" => "bilal@molengeek.com",
            "password" => "motDePasse",
            "created_at"=> now()
        ]);
  
        DB::table("users")->insert([
            "name" => "Elias",
            "email" => "elias@molengeek.com",
            "password" => "testtest",
            "created_at" => now()
        ]);
        
        DB::table("users")->insert([
            "name" => "Dedue",
            "email" => "dedue@molengeek.com",
            "password" => "bouclier",
            "created_at" => now()
        ]);
    }
}
