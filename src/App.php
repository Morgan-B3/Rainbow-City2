<?php

namespace RainbowCity;

//on créé une classe App qui va hériter de Altorouter, car lui ne gère que les routes, mais on va vouloir gérer d'autres trucs via App
use AltoRouter;

class App extends AltoRouter
{
    public function run()
    {
        // Pour whoops -> à désactiver quand on n'est plus dans le dev
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();

        //permet de récupérer l'URL actuelle
        $match = $this->match();
        //dump($match);

        if (is_array($match)){
            //on définit directement l'index des éléments du tableau récupéré avec expolde [$controller => UserController, $method => list]
            [$controller, $method] = explode ('@', $match['target']); // $match['target'] = UserController@list
            $controller = 'M2i\Mvc\Controller\\'.$controller; // on précise le FQDN de UserController pour pas avoir à faire de use
            $object = new $controller();
            $object->$method();
        }
        else {
            http_response_code(404);
            View::render('404');
        }
    }
}