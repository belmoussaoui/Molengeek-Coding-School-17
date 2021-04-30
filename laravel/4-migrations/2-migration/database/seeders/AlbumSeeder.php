<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("albums")->insert([
            "nom" => "album 1",
            "description" => "description 1",
            "created_at" => now()
        ]);
        DB::table("albums")->insert([
            "nom" => "album 2",
            "description" => "description 2",
            "created_at" => now()
        ]);
        DB::table("albums")->insert([
            "nom" => "album 3",
            "description" => "description 3",
            "created_at" => now()
        ]);
        DB::table("albums")->insert([
            "nom" => "album 4",
            "description" => "description 4",
            "created_at" => now()
        ]);
        DB::table("albums")->insert([
            "nom" => "album 5",
            "description" => "description 5",
            "created_at" => now()
        ]);
    }
}
