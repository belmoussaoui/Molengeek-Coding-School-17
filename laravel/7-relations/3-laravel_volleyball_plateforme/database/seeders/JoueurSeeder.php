<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('joueurs')->insert([
            'nom' => 'Liban',
            'prenom' => 'Mahad',
            'age' => 43,
            'numero' => 99,
            'pays' => 'Liban',
            'genre_id' => 1,
            'role_id' => 4,
            'equipe_id' => 5,
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'Boostrad',
            'prenom' => 'Said',
            'age' => 8,
            'numero' => 10,
            'pays' => 'Bangladesh',
            'genre_id' => 2,
            'role_id' => 1,
            'equipe_id' => 5,
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'Marcq',
            'prenom' => 'Camille',
            'age' => 20,
            'numero' => 5,
            'pays' => 'France',
            'genre_id' => 2,
            'role_id' => 2,
            'equipe_id' => 5,
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'Zlatan',
            'prenom' => 'Ibrahimovic',
            'age' => 49,
            'numero' => 11,
            'pays' => 'Suéde',
            'genre_id' => 3,
            'role_id' => 1,
            'equipe_id' => 5,
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'Maradona',
            'prenom' => 'Diego',
            'age' => 99,
            'numero' => 10,
            'pays' => 'Maroc',
            'genre_id' => 1,
            'role_id' => 3,
            'equipe_id' => 5
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'Gangsta',
            'prenom' => 'Arouf',
            'age' => 30,
            'numero' => 5,
            'pays' => 'Tunisie',
            'genre_id' => 1,
            'role_id' => 3,
            'equipe_id' => 1,
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'Zabroska',
            'prenom' => 'Mahak',
            'age' => 13,
            'numero' => 45,
            'pays' => 'Russie',
            'genre_id' => 2,
            'role_id' => 2,
            'equipe_id' => 3,
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'Ponko',
            'prenom' => 'Marto',
            'age' => 21,
            'numero' => 93,
            'pays' => 'Pays-Bas',
            'genre_id' => 1,
            'role_id' => 1,
            'equipe_id' => 1,
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'Tourkish',
            'prenom' => 'Khenan',
            'age' => 73,
            'numero' => 8,
            'pays' => 'Turquie',
            'genre_id' => 1,
            'role_id' => 4,
            'equipe_id' => 2,
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'Shakira',
            'prenom' => 'Hmida',
            'age' => 28,
            'numero' => 1,
            'pays' => 'Algerienne',
            'genre_id' => 2,
            'role_id' => 4,
            'equipe_id' => 2,
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'Mecana',
            'prenom' => 'Kheenana',
            'age' => 73,
            'numero' => 8,
            'pays' => 'Turquie',
            'genre_id' => 2,
            'role_id' => 4,
            'equipe_id' => 2,
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'moiaaa',
            'prenom' => 'lakekeh',
            'age' => 23,
            'numero' => 8,
            'pays' => 'Pakistan',
            'genre_id' => 2,
            'role_id' => 1,
            'equipe_id' => 3,
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'Maria',
            'prenom' => 'christina',
            'age' => 14,
            'numero' => 15,
            'pays' => 'Turquie',
            'genre_id' => 2,
            'role_id' => 2,
            'equipe_id' => 1,
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'Vladima',
            'prenom' => 'Costa',
            'age' => 21,
            'numero' => 2,
            'pays' => 'Turquie',
            'genre_id' => 2,
            'role_id' => 4,
            'equipe_id' => 2,
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'Mohema',
            'prenom' => 'heyla',
            'age' => 12,
            'numero' => 8,
            'pays' => 'uzbekistan',
            'genre_id' => 2,
            'role_id' => 1,
            'equipe_id' => 1,
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'Bolabola',
            'prenom' => 'Abdelhak',
            'age' => 16,
            'numero' => 2,
            'pays' => 'maroc',
            'genre_id' => 1,
            'role_id' => 4,
            'equipe_id' => 1,
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'Chkem',
            'prenom' => 'miyeuk',
            'age' => 12,
            'numero' => 8,
            'pays' => 'tunisie',
            'genre_id' => 1,
            'role_id' => 4,
            'equipe_id' => 4,
        ]);
        DB::table('joueurs')->insert([
            'nom' => 'Ewamarche',
            'prenom' => 'Khenan',
            'age' => 73,
            'numero' => 8,
            'pays' => 'Turquie',
            'genre_id' => 1,
            'role_id' => 4,
            'equipe_id' => 2,
        ]);
    
        DB::table('joueurs')->insert([
            'nom' => 'Hamidou',
            'prenom' => 'mahan',
            'age' => 73,
            'numero' => 8,
            'pays' => 'afganistan',
            'genre_id' => 1,
            'role_id' => 3,
            'equipe_id' => 2,
        ]);
    }
}
