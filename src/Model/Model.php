<?php

namespace RainbowCity\Model;

use RainbowCity\Database;

class Model
{
    public static function all()
    {
        $table = static::class; 
        //$class = strrchr($class, '\\');
        //$table = strtolower(substr($class, 1)).'s';
        $sql = "SELECT * FROM $table";
        $query = Database::get()->query($sql);

        return $query->fetchAll();
    }
}