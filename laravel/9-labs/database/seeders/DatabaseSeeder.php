<?php

namespace Database\Seeders;

use App\Models\Header;
use App\Models\HeroItem;
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
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            HeroSeeder::class,
            HeroItemSeeder::class,
            Header::class
        ]);
    }
}
