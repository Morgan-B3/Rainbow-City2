<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlacesCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('places_categories')->insert([
            'place_id' => '1',
            'category_id' => '1',
        ]);
        DB::table('places_categories')->insert([
            'place_id' => '2',
            'category_id' => '1',
        ]);
    }
}
