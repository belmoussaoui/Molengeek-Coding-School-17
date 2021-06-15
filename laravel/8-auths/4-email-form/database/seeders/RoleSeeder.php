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
            "name"=>"Admin",
            "created_at"=>now()
        ]);

        DB::table('roles')->insert([
            "name"=>"Webmaster",
            "created_at"=>now()
        ]);

        DB::table('roles')->insert([
            "name"=>"Editor",
            "created_at"=>now()
        ]);

        DB::table('roles')->insert([
            "name"=>"Member",
            "created_at"=>now()
        ]);

    }
}
