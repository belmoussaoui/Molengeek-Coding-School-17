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
        DB::table("users")->insert([
            'nom'=>'Asos',
            'prenom'=>'Abdel',
            'age'=>'22',
            'email'=>'abdelmolengeen@tqt.com',
            'mdp'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'pdp'=>'je te remplie avec une image',

        ]);
        DB::table("users")->insert([
            'nom'=>'Asos',
            'prenom'=>'Abdel',
            'age'=>'22',
            'email'=>'abdelmolesngeen@tqt.com',
            'mdp'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'pdp'=>'je te remplie avec une image',

        ]);
        DB::table("users")->insert([
            'nom'=>'Asos',
            'prenom'=>'Abdel',
            'age'=>'22',
            'email'=>'abdelmoflengeen@tqt.com',
            'mdp'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'pdp'=>'je te remplie avec une image',

        ]);
    }
}
