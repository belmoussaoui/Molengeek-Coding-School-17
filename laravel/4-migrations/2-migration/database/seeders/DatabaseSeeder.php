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
        $this->call(AlbumSeeder::class);
        $this->call(BibliothequeSeeder::class);
        $this->call(PhotoSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
