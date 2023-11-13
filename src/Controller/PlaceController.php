<?php

namespace RainbowCity\Controller;

use RainbowCity\Model\Places;
use RainbowCity\View;

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