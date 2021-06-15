<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            "auteur"=>"Saul Goodman",
            "quotes"=>"Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.",
            "image"=>"testimonials-1.jpg",
            "job"=>"Ceo & Founder"
        ]);

        DB::table('testimonials')->insert([
            "auteur"=>"Jena Karlis",
            "quotes"=>"Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.",
            "image"=>"testimonials-3.jpg",
            "job"=>"Store Owner"
        ]);

        DB::table('testimonials')->insert([
            "auteur"=>"Matt Brandon",
            "quotes"=>"Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore.",
            "image"=>"testimonials-4.jpg",
            "job"=>"Freelancer"
        ]);

        DB::table('testimonials')->insert([
            "auteur"=>"John Larson",
            "quotes"=>"Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa.",
            "image"=>"testimonials-5.jpg",
            "job"=>"Entrepreneur"
        ]);

        DB::table('testimonials')->insert([
            "auteur"=>"Sara Wilsson",
            "quotes"=>"Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.",
            "image"=>"testimonials-2.jpg",
            "job"=>"Designer"
        ]);
        
    }
}