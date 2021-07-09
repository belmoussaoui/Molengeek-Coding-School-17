<?php

namespace Database\Seeders;

use App\Models\Category;
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
            HeaderSeeder::class,
            AboutSeeder::class,
            TestimonialSeeder::class,
            TestimonialItemSeeder::class,
            ServiceSeeder::class,
            ServiceItemSeeder::class,
            TeamSeeder::class,
            PromotionSeeder::class,
            ContactSeeder::class,
            FooterSeeder::class,
            PostSeeder::class,
            TagSeeder::class,
            CategorySeeder::class,
            CategoryPostSeeder::class,
            PostTagSeeder::class,
            FeatureSeeder::class,
            FeatureItemSeeder::class,
        ]);
    }
}
