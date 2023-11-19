<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('places')->insert([
            'name' => 'Bar',
            'title' => 'Le Cube',
            'description' => 'Pour boire un coup',
            'description_short' => 'Pour boire un coup',
        ]);
        DB::table('places')->insert([
            'name' => 'Bibliothèque',
            'title' => 'La Boite',
            'description' => 'Pour boire un coup',
            'description_short' => 'Pour boire un coup',
        ]);
        
    }
}
