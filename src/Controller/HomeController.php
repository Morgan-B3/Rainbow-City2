<?php

namespace Morgan\RainbowCity\Controller;

use Morgan\RainbowCity\View;

class HomeController
{
    public function index()
    {
        return View::render('home');
    }
}