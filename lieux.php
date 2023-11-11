<?php

// Ajouter "categories" et "comments" via les foreign keys en MySQL

$lieux = [
    [
        'title' => 'Bar',
        'name' => '"Le Cube"',
        'image' => './images/bar.jpg',
        'image2' => './images/bar2.jpg',
        'description' => "Pas d'eau en vue, venez découvrir notre potion du sourire, vous ne ressortirez plus jamais de Rainbow city après avoir vécu cette expérience!",
        'description-mini' => "Pas d'eau en vue, venez découvrir notre potion du sourire, vous ne ressortirez plus jamais de Rainbow city après avoir vécu cette expérience!",
        'categories' => [

        ],
        'comments' => [
            [
                'icon' => './images/comments/comment1.jpg',
                'name' => 'Barney',
                'comment' => '*buuurp*',
                'rating' => 5,
                'date' => '2023-05-10'
            ],            
            [
                'icon' => './images/comments/comment2.jpg',
                'name' => 'Bender',
                'comment' => "J'ai vu pire mais les barman n'ont vraiment pas d'humour...",
                'rating' => 3,
                'date' => '2023-07-06'
            ],            
            [
                'icon' => './images/comments/comment3.jpg',
                'name' => 'Margaret',
                'comment' => "Honteux ! Comment ils ont pu me virer après tout ce que j'ai dépensé en boisson ??",
                'rating' => 1,
                'date' => '2023-06-27'
            ],            
        ],
    ],
    [
        'title' => '',
        'name' => '""',
        'image' => './images/bar.jpg',
        'image2' => './images/bar2.jpg',
        'description' => "",
        'description-mini' => "",
        'categories' => [

        ],
        'comments' => [
            [
                'icon' => './images/comments/comment1.jpg',
                'name' => '',
                'comment' => "",
                'rating' => 5,
                'date' => '2023-05-10'
            ],            
            [
                'icon' => './images/comments/comment2.jpg',
                'name' => 'Bender',
                'comment' => "J'ai vu pire mais les barman n'ont vraiment pas d'humour...",
                'rating' => 3,
                'date' => '2023-07-06'
            ],            
            [
                'icon' => './images/comments/comment3.jpg',
                'name' => 'Margaret',
                'comment' => "Honteux ! Comment ils ont pu me virer après tout ce que j'ai dépensé en boisson ??",
                'rating' => 1,
                'date' => '2023-06-27'
            ],            
        ],
    ],
    

    
];

