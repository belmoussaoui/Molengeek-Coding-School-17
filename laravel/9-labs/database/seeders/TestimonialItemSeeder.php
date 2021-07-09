<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonial_items')->insert([
            'name' => 'Michael Smith',
            'quote' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'avatar' => '01.jpg',
            'job' => 'CEO Company',
            'testimonial_id' => 1
        ]);
        DB::table('testimonial_items')->insert([
            'name' => 'Michael Smith 2',
            'quote' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'avatar' => '02.jpg',
            'job' => 'CEO Company',
            'testimonial_id' => 1
        ]);
        DB::table('testimonial_items')->insert([
            'name' => 'Michael Smith',
            'quote' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'avatar' => '02.jpg',
            'job' => 'CEO Company',
            'testimonial_id' => 1
        ]);
        DB::table('testimonial_items')->insert([
            'name' => 'Michael Smith 3',
            'quote' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'avatar' => '02.jpg',
            'job' => 'CEO Company',
            'testimonial_id' => 1
        ]);
        DB::table('testimonial_items')->insert([
            'name' => 'Michael Smith 4',
            'quote' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'avatar' => '02.jpg',
            'job' => 'CEO Company',
            'testimonial_id' => 1
        ]);
        DB::table('testimonial_items')->insert([
            'name' => 'Michael Smith 5',
            'quote' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'avatar' => '02.jpg',
            'job' => 'CEO Company',
            'testimonial_id' => 1
        ]);
        DB::table('testimonial_items')->insert([
            'name' => 'Michael Smith 6',
            'quote' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'avatar' => '02.jpg',
            'job' => 'CEO Company',
            'testimonial_id' => 1
        ]);
    }
}
