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
        \App\Models\Article::factory(10)->create();
        \App\Models\Portfolio::factory(12)->create();
        \App\Models\Entreprise::factory(8)->create();
    }
}
