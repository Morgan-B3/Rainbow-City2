<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Place;
use App\Models\User;
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
        $comments = Comment::where('place_id', '=', $place->id)->get()->sortByDesc('date');

        $ratings = 0;
        $count = 0;
        foreach($comments as $comment){
            $ratings += $comment->rating;
            $count ++;
        }
        $ratings /= $count;

        return view('place', [
            'title' => $place->name,
            'categories' => $categories,
            'place' => $place,
            'comments' => $comments,
            'users' => User::all(),
            'rating' => round($ratings,1),
        ]);
    }
}
