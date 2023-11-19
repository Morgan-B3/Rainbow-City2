<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index($category_name, $place_name)
    {
        $place = Place::where('name', '=', $place_name)->first();
        // $categories = Category::where('name', '=', $category_name)->get();
        $categories = Category::join('places_categories', 'categories.id', '=', 'places_categories.category_id')
                ->join('places', 'places.id', '=', 'places_categories.place_id')
                ->select('categories.*')
                ->where('places.id', $place->id)
                ->get();
        return view('place', [
            'title' => $place->name,
            'categories' => $categories,
            'place' => $place,
        ]);
    }
}
