<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Batiment::factory(10)->create();
        \App\Models\Formation::factory(10)->create();
        \App\Models\Eleve::factory(10)->create();
    }
}
