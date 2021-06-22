<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\TestimonialItem;
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
            SectionSeeder::class,
            HeroSeeder::class,
            AboutSeeder::class,
            IconSeeder::class,
            FeatureSeeder::class,
            FeatureItemSeeder::class,
            ServiceSeeder::class,
            ServiceItemSeeder::class,
            PortfolioSeeder::class,
            CardSeeder::class,
            TestimonialSeeder::class,
            TestimonialItemSeeder::class,
            TeamSeeder::class,
            MemberSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            ContactSeeder::class
        ]);
    }
}
