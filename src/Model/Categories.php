<?php

namespace Morgan\RainbowCity\Model;

class Categories extends Model
{

    public static $categories =[
        [
            'title'=>'Amis',
            'name'=>'Entre Amis',
            'category'=>'status',
            'category_name'=>'Entre Amis',
        ],
        [
            'title'=>'Amoureux',
            'name'=>'En Amoureux',
            'category'=>'status',
            'category_name'=>'En amoureux',
        ],
        [
            'title'=>'Animaux',
            'name'=>'Animaux-friendly',
            'category'=>'status',        
            'category_name'=>'Avec des animaux',
        ],
        [
            'title'=>'Collègues',
            'name'=>'Entre Collègues',
            'category'=>'status',
            'category_name'=>'Entre collègues',
        ],
        [
            'title'=>'Divertissement',
            'name'=>'Divertissement',
            'category'=>'activity',
            'category_name'=>'Divertissement',
        ],
        [
            'title'=>'Famille',
            'name'=>'En Famille',
            'category'=>'status',
            'category_name'=>'En Famille',
        ],
        [
            'title'=>'Gastronomie',
            'name'=>'Gastronomie',
            'category'=>'activity',
            'category_name'=>'Gastronomie',
        ],
        [
            'title'=>'Histoire',
            'name'=>'Histoire',
            'category'=>'activity',
            'category_name'=>'Histoire',
        ],
        [
            'title'=>'Insolite',
            'name'=>'Insolite',
            'category'=>'activity',
            'category_name'=>'Insolite',
        ],
        [
            'title'=>'Nature',
            'name'=>'Nature',
            'category'=>'activity',
            'category_name'=>'Nature',
        ],
        [
            'title'=>'PMR',
            'name'=>'Accès PMR',
            'category'=>'status',
            'category_name'=>'Personne à Mobilité Réduite (PMR)',
        ],
        [
            'title'=>'Résident',
            'name'=>'Résident',
            'category'=>'status',
            'category_name'=>'Résident',
        ],
        [
            'title'=>'Senior',
            'name'=>'Senior',
            'category'=>'status',
            'category_name'=>'Senior',
        ],
        [
            'title'=>'Solo',
            'name'=>'En solo',
            'category'=>'status',
            'category_name'=>'Seul',

        ],
        [
            'title'=>'Sport',
            'name'=>'Sport',
            'category'=>['status','activity',],
            'category_name'=>['Sportif','Sport'],
        ],
        
    ];

}