<?php

namespace Morgan\RainbowCity\Controller;

use Morgan\RainbowCity\Model\Categories;
use Morgan\RainbowCity\Model\Places;
use Morgan\RainbowCity\View;

class CategoryController
{
    public function categorySelect(string $categoryName)
    {
        $categories = Categories::$categories;
        $places = Places::$places;
        
        foreach ($categories as $category){
        if ($category['title'] == $categoryName){
            return View::render('category', [
                'category' => $category,
                'places' => $places
                ]);
        }
        }
    }
}