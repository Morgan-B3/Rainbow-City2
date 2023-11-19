<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Place;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($category_name)
    {
        //$category = Category::find($id);
        $category = Category::where('name', '=', $category_name)->first();
        $places = Place::join('places_categories', 'places.id', '=', 'places_categories.place_id')
                ->join('categories', 'categories.id', '=', 'places_categories.category_id')
                ->select('places.*')
                ->where('categories.id', $category->id)
                ->get();
        return view('category', [
            'title' => 'Liste '.$category->sub_name,
            'categories' => $category,
            'places' => $places,
        ]);
    }
}
