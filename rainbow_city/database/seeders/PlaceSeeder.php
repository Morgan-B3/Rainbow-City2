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
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Bibliothèque',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Bowling',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Cinéma',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Coiffeur',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Ecole',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Fleuriste',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Forêt',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Gare',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Hopital',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Jardin',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Mairie',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Maison de Retraite',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Musée',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Opéra',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Parc',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Plage',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Caserne',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Quartier',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Restaurant',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Rivière',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Supermarché',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Théâtre',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Usine',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        
    }
}
