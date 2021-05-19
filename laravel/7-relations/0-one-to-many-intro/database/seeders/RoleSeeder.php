<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'nom' => 'Admin' 
        ]);
        DB::table('roles')->insert([
            'nom' => 'Webmaster' 
        ]);
        DB::table('roles')->insert([
            'nom' => 'Rédacteur' 
        ]);
        DB::table('roles')->insert([
            'nom' => 'Client' 
        ]);
        DB::table('roles')->insert([
            'nom' => 'Invité' 
        ]);
    }
}
