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
        // \App\Models\User::factory(10)->create();
        $this->call(CounterSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(HeroSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
    }
}