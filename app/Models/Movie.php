<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['name', 'categories_id', 'description', 'pic_path', 'length', 'release_date'];

    function Category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
}
