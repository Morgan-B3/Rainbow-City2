<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function places()
    {
        return $this->belongsToMany('App\Models\Place', 'places_categories', 'category_id', 'place_id');
    }
}
