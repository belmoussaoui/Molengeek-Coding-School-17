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
        $this->call(BatimentSeeder::class);
        $this->call(FormationSeeder::class);
        $this->call(TypeFormationSeeder::class);
        \App\Models\Eleve::factory(50)->create();
    }
}
