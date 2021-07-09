<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feature_items')->insert([
            'name' => 'Get in the lab',
            'text' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icon' => 'flaticon-002-caliper',
            'feature_id' => 1
        ]);
        DB::table('feature_items')->insert([
            'name' => 'Projects online',
            'text' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icon' => 'flaticon-019-coffee-cup',
            'feature_id' => 1
        ]);
        DB::table('feature_items')->insert([
            'name' => 'Smart marketing',
            'text' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icon' => 'flaticon-020-creativity',
            'feature_id' => 1
        ]);
        DB::table('feature_items')->insert([
            'name' => 'Get in the lab',
            'text' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icon' => 'flaticon-037-idea',
            'feature_id' => 1
        ]);
        DB::table('feature_items')->insert([
            'name' => 'Projects online',
            'text' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icon' => 'flaticon-025-imagination',
            'feature_id' => 1
        ]);
        DB::table('feature_items')->insert([
            'name' => 'Smart marketing',
            'text' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icon' => 'flaticon-008-team',
            'feature_id' => 1
        ]);
    }
}
