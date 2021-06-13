<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name"=>"Said",
            "email"=>"maktabisaid1@gmail.com",
            "password"=>Hash::make("testtest"),
            "role_id"=>1,
            "created_at"=>now()
        ]);

        DB::table('users')->insert([
            "name"=>"Bilal",
            "email"=>"bilal@gmail.com",
            "password"=>Hash::make("testtest"),
            "role_id"=>2,
            "created_at"=>now()
        ]);

        DB::table('users')->insert([
            "name"=>"Cem",
            "email"=>"cem@gmail.com",
            "password"=>Hash::make("testtest"),
            "role_id"=>4,
            "created_at"=>now()
        ]);

        DB::table('users')->insert([
            "name"=>"Mahad",
            "email"=>"mahad@gmail.com",
            "password"=>Hash::make("testtest"),
            "role_id"=>3,
            "created_at"=>now()
        ]);

        DB::table('users')->insert([
            "name"=>"Elias",
            "email"=>"elias@gmail.com",
            "password"=>Hash::make("testtest"),
            "role_id"=>4,
            "created_at"=>now()
        ]);
    }
}