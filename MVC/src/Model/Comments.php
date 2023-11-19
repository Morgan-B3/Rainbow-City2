<?php

// Ajouter "user_id" "place_id" via les foreign keys en MySQL

namespace Morgan\RainbowCity\Model;

class Comments extends Model
{
    public static $comments =  [
        [
            'icon' => './images/comments/icon1.jpg',
            'place_id' => 'Bar',
            'user_id' => 'Barney',
            'comment' => '*buuurp*',
            'rating' => 5,
            'date' => '2023-05-10'
        ],            
        [
            'icon' => './images/comments/icon2.jpg',
            'place_id' => 'Bar',
            'user_id' => 'Bender',
            'comment' => "J'ai vu pire mais les barman n'ont vraiment pas d'humour...",
            'rating' => 3,
            'date' => '2023-07-06'
        ],            
        [
            'icon' => './images/comments/icon3.jpg',
            'place_id' => 'Bar',
            'user_id' => 'Margaret',
            'comment' => "Honteux ! Comment ils ont pu me virer après tout ce que j'ai dépensé en boisson ??",
            'rating' => 1,
            'date' => '2023-06-27'
        ], 
        
        

        [
            'icon' => './images/comments/icon00.jpg',
            'place_id' => 'Bibliothèque',
            'user_id' => 'Joyeux59',
            'comment' => "J'adore croquer des bricks !",
            'rating' => 5,
            'date' => '2023-05-30'
        ],            
        [
            'icon' => './images/comments/icon00.jpg',
            'place_id' => 'Bibliothèque',
            'user_id' => 'Simplet._.',
            'comment' => "Je comprends pas tous les livres, heureusement que certains ont des images !",
            'rating' => 3,
            'date' => '2023-06-10'
        ],            
        [
            'icon' => './images/comments/icon01.jpg',
            'place_id' => 'Bibliothèque',
            'user_id' => 'Briquette',
            'comment' => "J'aime beaucoup leurs espaces de travail.",
            'rating' => 5,
            'date' => '2023-06-23'
        ],   
        
        

        [
            'icon' => './images/comments/icon00.jpg',
            'place_id' => 'Bowling',
            'user_id' => 'LeStrikerFou',
            'comment' => "Qui pour me défier ?",
            'rating' => 5,
            'date' => '2023-05-30'
        ],            
        [
            'icon' => './images/comments/icon00.jpg',
            'place_id' => 'Bowling',
            'user_id' => 'Simplet._.',
            'comment' => "Certaines boules sont un peu lourdes...",
            'rating' => 3,
            'date' => '2023-06-10'
        ],            
        [
            'icon' => './images/comments/icon01.jpg',
            'place_id' => 'Bowling',
            'user_id' => 'Briquette',
            'comment' => "Bizarre d'avoir des briques rondes, mais j'ai adoré dégommer des quilles avec.",
            'rating' => 5,
            'date' => '2023-06-23'
        ],            
        


        [
            'icon' => './images/comments/icon01.jpg',
            'place_id' => 'Cinéma',
            'user_id' => 'Briquette',
            'comment' => "C'était bien, dommage qu'il n'y avait pas d'écran.",
            'rating' => 2,
            'date' => '2023-05-17'
        ],            
        [
            'icon' => './images/comments/icon00.jpg',
            'place_id' => 'Cinéma',
            'user_id' => 'Simplet._.',
            'comment' => "Beaux sièges, rien à redire...",
            'rating' => 3,
            'date' => '2023-06-10'
        ],            
        [
            'icon' => './images/comments/icon00.jpg',
            'place_id' => 'Cinéma',
            'user_id' => 'Joyeux',
            'comment' => "",
            'rating' => 5,
            'date' => '2023-06-23'
        ],            
        



        [
            'icon' => './images/comments/icon.jpg',
            'place_id' => '',
            'user_id' => 'Joyeux59',
            'comment' => "",
            'rating' => 5,
            'date' => '2023-05-30'
        ],            
        [
            'icon' => './images/comments/icon.jpg',
            'place_id' => '',
            'user_id' => 'Simplet._.',
            'comment' => "",
            'rating' => 3,
            'date' => '2023-06-10'
        ],            
        [
            'icon' => './images/comments/icon.jpg',
            'place_id' => '',
            'user_id' => 'Briquette',
            'comment' => "",
            'rating' => 5,
            'date' => '2023-06-23'
        ], 
                   
    ];

}

