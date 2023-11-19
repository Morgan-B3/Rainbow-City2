<?php

namespace Morgan\RainbowCity\Controller;

use Morgan\RainbowCity\Model\Categories;
use Morgan\RainbowCity\Model\Places;
use Morgan\RainbowCity\View;

class HomeController
{
    public function index()
    {
        $categories = Categories::$categories;
        $places = Places::$places;
        
        return View::render('home', [
            'categories' => $categories,
            'places' => $places,
        ]);
    }
}