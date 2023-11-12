<?php

namespace App\Controller;

use App\Model\Place;
use App\View;

class PlaceController
{
    public function list()
    {
        $title = 'Lieux';
        $places = Place::$places;
        
        return View::render('place', [
            'title' => $title,
            'place' => $places,
        ]);
    }
}