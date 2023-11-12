<?php

use App\Controller\CategoryController;
use App\Controller\PlaceController;

require "../vendor/autoload.php";

// Pour whoops
//$whoops = new \Whoops\Run;
//$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
//$whoops->register();


if ($_GET['category']){
    $category = $_GET['category'];   
    $controller = new CategoryController();
    echo $controller->categorySelect($category);
};

if ($_GET['place']){
    $place = $_GET['place'];   
    $controller = new PlaceController();
    echo $controller->placeSelect($place);
};

if ($_GET['place']){
    $place = $_GET['place'];   
    $controller = new PlaceController();
    echo $controller->placeSelect($place);
};