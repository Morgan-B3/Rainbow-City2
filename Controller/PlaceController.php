<?php

namespace App\Controller;

use App\Model\Places;
use App\View;

class PlaceController
{
    public function placeSelect(string $placeName)
    {
        $places = Places::$places;
        
        foreach ($places as $place){
        if ($place['title'] == $placeName){
            return View::render('place', $place);
        }
        }
    }
}