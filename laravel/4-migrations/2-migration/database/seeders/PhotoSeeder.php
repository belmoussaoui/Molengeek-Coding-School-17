<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("photos")->insert([
            "nom" => "photo1",
            "path" => "path1",
            "created_at" => now()
        ]);
        DB::table("photos")->insert([
            "nom" => "photo2",
            "path" => "path2",
            "created_at" => now()
        ]);
        DB::table("photos")->insert([
            "nom" => "photo3",
            "path" => "path3",
            "created_at" => now()
        ]);
        DB::table("photos")->insert([
            "nom" => "photo4",
            "path" => "path4",
            "created_at" => now()
        ]);
        DB::table("photos")->insert([
            "nom" => "photo5",
            "path" => "path5",
            "created_at" => now()
        ]);
        DB::table("photos")->insert([
            "nom" => "photo6",
            "path" => "path6",
            "created_at" => now()
        ]);
        DB::table("photos")->insert([
            "nom" => "photo7",
            "path" => "path7",
            "created_at" => now()
        ]);
        DB::table("photos")->insert([
            "nom" => "photo8",
            "path" => "path8",
            "created_at" => now()
        ]);
        DB::table("photos")->insert([
            "nom" => "photo9",
            "path" => "path9",
            "created_at" => now()
        ]);
        DB::table("photos")->insert([
            "nom" => "photo10",
            "path" => "path10",
            "created_at" => now()
        ]);
    }
}
