<?php

// Ajouter "categories" et "comments" via les foreign keys en MySQL

$lieux = [
    [
        'title' => 'Bar',
        'name' => '"Le Cube"',
        'image' => 'bar.jpg',
        'image2' => 'bar2.jpg',
        'description' => "Pas d'eau en vue, venez découvrir notre potion du sourire, vous ne ressortirez plus jamais de Rainbow city après avoir vécu cette expérience!",
        'description-mini' => "Pas d'eau en vue, venez découvrir notre potion du sourire, vous ne ressortirez plus jamais de Rainbow city après avoir vécu cette expérience!",
        'categories' => [

        ],
        'comments' => [
            [
                'icon' => 'icon1.jpg',
                'name' => 'Barney',
                'comment' => '*buuurp*',
                'rating' => 5,
                'date' => '2023-05-10'
            ],            
            [
                'icon' => 'icon2.jpg',
                'name' => 'Bender',
                'comment' => "J'ai vu pire mais les barman n'ont vraiment pas d'humour...",
                'rating' => 3,
                'date' => '2023-07-06'
            ],            
            [
                'icon' => 'icon3.jpg',
                'name' => 'Meredith',
                'comment' => "Honteux ! Comment ils ont pu me virer après tout ce que j'ai dépensé en boisson ??",
                'rating' => 1,
                'date' => '2023-06-27'
            ],            
        ],
    ],
    [
        'title' => 'Bibliothèque',
        'name' => '"Brick Books"',
        'image' => 'bibliotheque.jpg',
        'image2' => '',
        'description' => "Bricks & Books est un lieu où petits et grands peuvent venir partager leur passion de la lecture. Donner envie de croquer des bricks de textes est notre coeur de métier. Alors bonne lecture à toutes et tous !",
        'description-mini' => "Brick Books est un lieu où petits et grands peuvent venir partager leur passion de la lecture. Donner envie de croquer des bricks de textes est notre coeur de métier. Alors bonne lecture à toutes et tous !",
        'categories' => [

        ],
        'comments' => [
            [
                'icon' => 'icon00.jpg',
                'name' => 'Joyeux59',
                'comment' => "J'adore croquer des bricks !",
                'rating' => 5,
                'date' => '2023-05-30'
            ],            
            [
                'icon' => 'icon00.jpg',
                'name' => 'Simplet._.',
                'comment' => "Je comprends pas tous les livres, heureusement que certains ont des images !",
                'rating' => 3,
                'date' => '2023-06-10'
            ],            
            [
                'icon' => 'icon01.jpg',
                'name' => 'Briquette',
                'comment' => "J'aime beaucoup leurs espaces de travail.",
                'rating' => 5,
                'date' => '2023-06-23'
            ],            
        ],
    ],
    [
        'title' => 'Bowling',
        'name' => '"Aux Boules et Quilles"',
        'image' => 'bowling.jpg',
        'image2' => '',
        'description' => "Aux Boules et Quilles permet aux enfants, aux parents, aux amis de se défouler sur la piste. La taille de nos boules est adaptée à chaque catégorie de joueurs. Alors ne vous faites pas de brique, et tous à vos boules pour striker en coeur !",
        'description-mini' => "Aux Boules et Quilles permet aux enfants, aux parents, aux amis de se défouler sur la piste. La taille de nos boules est adaptée à chaque catégorie de joueurs. Alors ne vous faites pas de brique, et tous à vos boules pour striker en coeur !",
        'categories' => [

        ],
        'comments' => [
            [
                'icon' => 'icon00.jpg',
                'name' => 'LeStrikerFou',
                'comment' => "Qui pour me défier ?",
                'rating' => 5,
                'date' => '2023-05-30'
            ],            
            [
                'icon' => 'icon00.jpg',
                'name' => 'Simplet._.',
                'comment' => "Certaines boules sont un peu lourdes...",
                'rating' => 3,
                'date' => '2023-06-10'
            ],            
            [
                'icon' => 'icon01.jpg',
                'name' => 'Briquette',
                'comment' => "Bizarre d'avoir des briques rondes, mais j'ai adoré dégommer des quilles avec.",
                'rating' => 5,
                'date' => '2023-06-23'
            ],            
        ],
    ],
    [
        'title' => 'Cinéma',
        'name' => '"LegoMAX"',
        'image' => 'cinema.jpg',
        'image2' => '',
        'description' => "Bienvenue dans l'antre du 6ème art de Rainbow city, faites place à la 5D 16K, pour voir des briques plus cubiques que jamais !<br><br>A l'affiche cette semaine :<br><br>- JuraBrick Park<br>- Le Seigneur des Legos<br>- Titabrick<br>- Cube Wars, épisode III : la Revanche des Briques<br>- Indiana Lego : Les aventuriers de la Brique perdue<br>- Stranger Bricks",
        'description-mini' => "Bienvenue dans l'antre du 6ème art de Rainbow city, faites place à la 5D 16K, pour voir des briques plus cubiques que jamais !",
        'categories' => [

        ],
        'comments' => [
            [
                'icon' => 'icon01.jpg',
                'name' => 'Briquette',
                'comment' => "C'était bien, dommage qu'il n'y avait pas d'écran.",
                'rating' => 2,
                'date' => '2023-05-17'
            ],            
            [
                'icon' => 'icon00.jpg',
                'name' => 'Simplet._.',
                'comment' => "Beaux sièges, rien à redire...",
                'rating' => 3,
                'date' => '2023-06-10'
            ],            
            [
                'icon' => 'icon00.jpg',
                'name' => 'Joyeux',
                'comment' => "",
                'rating' => 5,
                'date' => '2023-06-23'
            ],            
        ],
    ],
    
    [
        'title' => '',
        'name' => '""',
        'image' => './images/places.jpg',
        'image2' => '',
        'description' => "",
        'description-mini' => "",
        'categories' => [

        ],
        'comments' => [
            [
                'icon' => 'icon.jpg',
                'name' => 'Joyeux59',
                'comment' => "",
                'rating' => 5,
                'date' => '2023-05-30'
            ],            
            [
                'icon' => 'icon.jpg',
                'name' => 'Simplet._.',
                'comment' => "",
                'rating' => 3,
                'date' => '2023-06-10'
            ],            
            [
                'icon' => 'icon.jpg',
                'name' => 'Briquette',
                'comment' => "",
                'rating' => 5,
                'date' => '2023-06-23'
            ],            
        ],
    ],
    

    
];

