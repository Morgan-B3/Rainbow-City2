<?php

namespace Morgan\RainbowCity\Controller;

use Morgan\RainbowCity\Model\Places;
use Morgan\RainbowCity\View;

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