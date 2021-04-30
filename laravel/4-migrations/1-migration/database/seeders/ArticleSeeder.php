<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("articles")->insert([
            "auteur" => "auteur1",
            "date" => "2001-10-29",
            "commentaire" => "c'est mon commentaire1!"
        ]);
        DB::table("articles")->insert([
            "auteur" => "auteur2",
            "date" => "2004-02-19",
            "commentaire" => "c'est mon commentaire2!"
        ]);
        DB::table("articles")->insert([
            "auteur" => "auteur3",
            "date" => "2001-09-11",
            "commentaire" => "oula!"
        ]);
        DB::table("articles")->insert([
            "auteur" => "auteur4",
            "date" => "2012-12-23",
            "commentaire" => "c'est mon commentaire4!"
        ]);
        DB::table("articles")->insert([
            "auteur" => "auteur5",
            "date" => "2011-08-12",
            "commentaire" => "c'est mon commentaire5!"
        ]);
        //
    }
}
