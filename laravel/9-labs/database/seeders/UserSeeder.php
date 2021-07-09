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
            'name' => 'Christinne Williams',
            'email' => 'williams@test.com',
            'password' => Hash::make('testtest'),
            'role_id' => 1,
            'avatar' => '2.jpg',
            'job' => 'Junior Developer',
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Ashley Jones',
            'email' => 'jones@test.com',
            'password' => Hash::make('testtest'),
            'role_id' => 2,
            'avatar' => '1.jpg',
            'job' => 'Project Manager',
            'created_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Frank Miller',
            'email' => 'miller@test.com',
            'password' => Hash::make('testtest'),
            'role_id' => 3,
            'avatar' => '3.jpg',
            'job' => 'Digital Designer',
            'created_at' => now()
        ]);
    }
}
