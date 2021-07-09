<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'description' => 'What our clients say',
            'site' => 'Colorlib',
            'site_href' => 'https://colorlib.com/'
        ]);
    }
}
