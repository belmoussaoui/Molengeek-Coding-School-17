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
            'name' => 'Walter White',
            'email' => 'white@mail.com',
            'password' => Hash::make('testtest'),
        ]);
        DB::table('users')->insert([
            'name' => 'Sarah Jhonson',
            'email' => 'jhonson@mail.com',
            'password' => Hash::make('testtest'),
        ]);
        DB::table('users')->insert([
            'name' => 'William Anderson',
            'email' => 'anderson@mail.com',
            'password' => Hash::make('testtest'),
        ]);
        DB::table('users')->insert([
            'name' => 'Amanda Jepson',
            'email' => 'jepson@mail.com',
            'password' => Hash::make('testtest'),
        ]);
    }
}
