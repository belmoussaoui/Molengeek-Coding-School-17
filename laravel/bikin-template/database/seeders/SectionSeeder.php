<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultText = 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.';
        DB::table('sections')->insert([
            'title' => 'Build Better Websites With Bikin',
            'text' => 'We are team of talented designers making websites with Bootstrap',
        ]);
        DB::table('sections')->insert([
            'title' => 'Voluptatem dignissimos provident quasi',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit',
        ]);
        DB::table('sections')->insert([
            'title' => 'Features',
            'text' => $defaultText,
        ]);
        DB::table('sections')->insert([
            'title' => 'Services',
            'text' => $defaultText,
        ]);
        DB::table('sections')->insert([
            'title' => 'Portfolio',
            'text' => $defaultText,
        ]);
        DB::table('sections')->insert([
            'title' => 'Testimonials',
            'text' => $defaultText,
        ]);
        DB::table('sections')->insert([
            'title' => 'Team',
            'text' => $defaultText,
        ]);
        DB::table('sections')->insert([
            'title' => 'Contact',
            'text' => $defaultText,
        ]);
    }
}
