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
            'testimonial_id' => 1,
            'image' => 'testimonials-1.jpg',
            'quote' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
            'name' => 'Saul Goodman',
            'job' => 'Ceo & Founder'
        ]);
        DB::table('testimonial_items')->insert([
            'testimonial_id' => 1,
            'image' => 'testimonials-2.jpg',
            'quote' => 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.',
            'name' => 'Sara Wilsson',
            'job' => 'Designer'
        ]);
        DB::table('testimonial_items')->insert([
            'testimonial_id' => 1,
            'image' => 'testimonials-3.jpg',
            'quote' => 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.',
            'name' => 'Jena Karlis',
            'job' => 'Store Owner'
        ]);
        DB::table('testimonial_items')->insert([
            'testimonial_id' => 1,
            'image' => 'testimonials-4.jpg',
            'quote' => 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.',
            'name' => 'Matt Brandon',
            'job' => 'Freelancer'
        ]);
        DB::table('testimonial_items')->insert([
            'testimonial_id' => 1,
            'image' => 'testimonials-5.jpg',
            'quote' => 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.',
            'name' => 'John Larson',
            'job' => 'Entrepreneur'
        ]);
    }
}
