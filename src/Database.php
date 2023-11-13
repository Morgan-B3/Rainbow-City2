<?php

namespace Morgan\RainbowCity;

class Database
{
    private static $instance; 

    public static function get()
    {
        if (null === self::$instance) {
            self::$instance = new \PDO('mysql:host=localhost;dbname=rainbow_city', 'root', '');
        }

        return self::$instance;
    }
}