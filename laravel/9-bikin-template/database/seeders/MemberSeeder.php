<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'image' => 'team-1.jpg',
            'job' => 'Chief Executive Officer',
        ]);
        DB::table('members')->insert([
            'image' => 'team-2.jpg',
            'job' => 'Product Manager',
        ]);
        DB::table('members')->insert([
            'image' => 'team-3.jpg',
            'job' => 'CTO',
        ]);
        DB::table('members')->insert([
            'image' => 'team-4.jpg',
            'job' => 'Accountant',
        ]);
    }
}
