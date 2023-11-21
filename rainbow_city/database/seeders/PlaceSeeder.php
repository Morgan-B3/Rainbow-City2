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
            'slug' => 'bar',
            'title' => 'Le Cube',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Bibliothèque',
            'slug' => 'bibliotheque',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Bowling',
            'slug' => 'bowling',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Cinéma',
            'slug' => 'cinema',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Coiffeur',
            'slug' => 'coiffeur',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Ecole',
            'slug' => 'ecole',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Fleuriste',
            'slug' => 'fleuriste',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Forêt',
            'slug' => 'foret',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Gare',
            'slug' => 'gare',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Hôpital',
            'slug' => 'hopital',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Jardin',
            'slug' => 'jardin',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Mairie',
            'slug' => 'mairie',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Maison de Retraite',
            'slug' => 'maison-de-retraite',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Musée',
            'slug' => 'musee',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Opéra',
            'slug' => 'opera',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Parc',
            'slug' => 'parc',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Plage',
            'slug' => 'plage',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Caserne',
            'slug' => 'caserne',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Quartier',
            'slug' => 'quartier',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Restaurant',
            'slug' => 'restaurant',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Rivière',
            'slug' => 'riviere',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Supermarché',
            'slug' => 'supermarche',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Théâtre',
            'slug' => 'theatre',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        DB::table('places')->insert([
            'name' => 'Usine',
            'slug' => 'usine',
            'title' => 'La Boite',
            'description' => fake()->text(200),
            'description_short' => fake()->text(100),
        ]);
        
    }
}
