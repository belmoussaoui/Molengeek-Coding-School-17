<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'section_id' => 8,
            'address_street' => 'A108 Adam Street',
            'address_city' => 'New York',
            'address_number' => 'NY 535022',
            'address_country' => 'United States',
            'email1' => 'info@example.com',
            'email2' => 'contact@example.com',
            'phone1' => '+1 5589 55488 55',
            'phone2' => '+1 6678 254445 41',
        ]);
    }
}
