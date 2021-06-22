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
            'team_id' => 1,
            'role_id' => 1,
            'member_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Sarah Jhonson',
            'email' => 'jhonson@mail.com',
            'password' => Hash::make('testtest'),
            'team_id' => 1,
            'role_id' => 2,
            'member_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'William Anderson',
            'email' => 'anderson@mail.com',
            'password' => Hash::make('testtest'),
            'team_id' => 1,
            'role_id' => 2,
            'member_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'Amanda Jepson',
            'email' => 'jepson@mail.com',
            'password' => Hash::make('testtest'),
            'team_id' => 1,
            'role_id' => 2,
            'member_id' => 4
        ]);
    }
}
