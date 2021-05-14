<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $icones = ["fa-address-book", "fa-taxi", "fa-hospital", "fa-cut", "fa-fire-extinguisher"];
        for ($i=1; $i <= 10; $i++) { 
            $icone = $icones[array_rand($icones)];
            DB::table('services')->insert([
                'icone' => $icone,
                'titre' => "title " . $i,
                'description' => "description" . $i
            ]);
            
        }
    }
}
