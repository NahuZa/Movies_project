<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConnectCategoriesStudios extends Model
{
    protected $fillable = ['studios_id', 'categories_id'];

    function Studio()
    {
        return $this->belongsTo(Studio::class, 'studios_id');
    }

    function Category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
}
