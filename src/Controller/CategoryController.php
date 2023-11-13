<?php

namespace RainbowCity\Controller;

use RainbowCity\Model\Categories;
use RainbowCity\Model\Places;
use RainbowCity\View;

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