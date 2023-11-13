<?php

require "../vendor/autoload.php";

use RainbowCity\App;


// if ($_GET['category']){
//     $category = $_GET['category'];   
//     $controller = new CategoryController();
//     echo $controller->categorySelect($category);
// };

// if ($_GET['place']){
//     $place = $_GET['place'];   
//     $controller = new PlaceController();
//     echo $controller->placeSelect($place);
// };

// if ($_GET['place']){
//     $place = $_GET['place'];   
//     $controller = new PlaceController();
//     echo $controller->placeSelect($place);
// };

$app = new App();

//Routes
// on passe par cette ligne de commande si on n'a pas défini le port 8000
$app->setBasePath('Rainbow-City2/public');

$app->addRoutes([
    //['GET', '/', 'HomeController@index'],
    ['GET', '/category', 'CategoryController@categorySelect'],
    ['GET', '/place', 'PlaceController@placeSelect'],

]);

$app->run();
