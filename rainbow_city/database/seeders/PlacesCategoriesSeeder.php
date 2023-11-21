<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Place;
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
        // CATEGORIES :

        // 'Amis',
        // 'Amoureux',
        // 'Animaux',
        // 'Collègues',
        // 'Divertissement',
        // 'Famille',
        // 'Gastronomie',
        // 'Histoire',
        // 'Insolite',
        // 'Nature',
        // 'PMR',
        // 'Résident',
        // 'Senior',    
        // 'Solo',
        // 'Sport'

        $placesCategories = 
        [
            'Bar' =>[
                'Amis',
                'Amoureux',
                'Collègues',
                'Divertissement',
                'Gastronomie',
                'Insolite',
                'PMR',
                'Résident',  
                'Solo'
            ],
            'Bibliothèque'=> [
                'Amoureux',            
                'Divertissement',
                'Famille',
                'Histoire',
                'PMR',
                'Senior',    
                'Solo',
            ],
            'Bowling' => [

            ],
            'Cinéma' => [

            ],
            'Coiffeur' => [

            ],
            'Ecole' => [

            ],
            'Fleuriste' => [

            ],
            'Forêt' => [

            ],
            'Gare' => [

            ],
            'Hopital' => [

            ],
            'Jardin' => [

            ],
            'Mairie' => [

            ],
            'Maison de Retraite' => [

            ],
            'Musée' => [

            ],
            'Opéra' => [

            ],
            'Parc' => [

            ],
            'Plage' => [

            ],
            'Caserne' => [

            ],
            'Quartier' => [

            ],
            'Restaurant' => [

            ],
            'Rivière' => [

            ],
            'Supermarché' => [

            ],
            'Théâtre' => [

            ],
            'Usine' => [
            ],
        ];

        foreach($placesCategories as $place_name => $categories){
            $place = Place::where('name', '=', $place_name)->first();
            
            foreach($categories as $category_name){
                $category = Category::where('name', '=', $category_name)->first();
                DB::table('places_categories')->insert([
                    'place_id' => $place->id,
                    'category_id' => $category->id,
                ]);
            }
        }
    }
}
