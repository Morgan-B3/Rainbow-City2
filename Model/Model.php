<?php

namespace App\Model;

use App\Database;

class Model
{
    public static function all()
    {
        $class = static::class; 
        $class = strrchr($class, '\\');
        $table = strtolower(substr($class, 1)).'s';
        $sql = "SELECT * FROM $table";
        $query = Database::get()->query($sql);

        return $query->fetchAll();
    }
}