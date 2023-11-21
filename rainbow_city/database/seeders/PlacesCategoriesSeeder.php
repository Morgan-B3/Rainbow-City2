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
                'Résident',
                'Senior',    
                'Solo',
            ],
            'Bowling' => [
                'Amis',
                'Amoureux',
                'Collègues',
                'Divertissement',
                'Famille',
                'PMR',
                'Résident',  
                'Sport'
            ],
            'Cinéma' => [
                'Amis',
                'Amoureux',
                'Divertissement',
                'Famille',
                'PMR',
                'Résident',
                'Senior',    
                'Solo',
            ],
            'Coiffeur' => [
                'Famille',
                'PMR',
                'Résident',
                'Senior',    
                'Solo',
            ],
            'Ecole' => [
                'Famille',
                'Histoire',
                'PMR',
                'Résident',
            ],
            'Fleuriste' => [
                'Amoureux',
                'Nature',
                'PMR',
                'Résident',
                'Senior',    
            ],
            'Forêt' => [
                'Amoureux',
                'Animaux',
                'Famille',
                'Insolite',
                'Nature',
                'Résident',
                'Senior',    
                'Solo',
                'Sport'
            ],
            'Gare' => [
                'Animaux',
                'Collègues',
                'Famille',
                'Histoire',
                'PMR',
                'Résident',
            ],
            'Hopital' => [
                'Histoire',
                'PMR',
                'Résident',
                'Senior',    
            ],
            'Jardin' => [
                'Amis',
                'Amoureux',
                'Animaux',
                'Famille',
                'Insolite',
                'Nature',
                'Résident',
                'Senior',    
                'Solo',
            ],
            'Mairie' => [
                'Histoire',
                'PMR',
                'Résident',
            ],
            'Maison de Retraite' => [
                'PMR',
                'Résident',
                'Senior',    
            ],
            'Musée' => [
                'Amis',
                'Amoureux',
                'Famille',
                'Histoire',
                'Insolite',
                'Nature',
                'PMR',
                'Résident',
                'Senior',    
                'Solo',
            ],
            'Opéra' => [
                'Amoureux',
                'Divertissement',
                'Histoire',
                'PMR',
                'Résident',
                'Senior',    
                'Solo',
            ],
            'Parc' => [
                'Amis',
                'Amoureux',
                'Animaux',
                'Famille',
                'Nature',
                'PMR',
                'Résident',
                'Senior',    
                'Solo',
                'Sport'
            ],
            'Plage' => [
                'Amis',
                'Amoureux',
                'Animaux',
                'Divertissement',
                'Famille',
                'Insolite',
                'Nature',
                'PMR',
                'Résident',
                'Senior',    
                'Solo',
                'Sport'
            ],
            'Caserne' => [
                'Histoire',
                'Résident',
            ],
            'Quartier' => [
                'Animaux',
                'Famille',
                'PMR',
                'Résident',
                'Senior',    
                'Solo',
            ],
            'Restaurant' => [
                'Amis',
                'Amoureux',
                'Collègues',
                'Famille',
                'Gastronomie',
                'PMR',
                'Résident',
                'Senior',    
                'Solo',
            ],
            'Rivière' => [
                'Amoureux',
                'Animaux',
                'Histoire',
                'Insolite',
                'Nature',
                'Résident',   
                'Solo',
                'Sport'
            ],
            'Supermarché' => [
                'Famille',
                'Gastronomie',
                'PMR',
                'Résident',
                'Senior',    
                'Solo',
            ],
            'Théâtre' => [
                'Amoureux',
                'Divertissement',
                'Histoire',
                'PMR',
                'Résident',
                'Senior',    
                'Solo',
            ],
            'Usine' => [
                'Collègues',
                'Histoire',
                'Résident',
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
