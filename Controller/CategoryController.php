<?php

namespace App\Controller;

use App\Model\Categories;
use App\Model\Places;
use App\View;

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