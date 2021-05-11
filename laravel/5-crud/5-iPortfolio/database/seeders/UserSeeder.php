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
        DB::table('users')->insert([
            'birthday' => date('Y-m-d'),
            'website' => 'www.example.com',
            'phone' => '+123 456 7890',
            'city' => 'City : New York, USA',
            'age' => 30,
            'degree' => 'Master',
            'phEmailone' => 'email@example.com',
            'freelance' => true,
            'created_at' => now()
        ]);
    }
}
