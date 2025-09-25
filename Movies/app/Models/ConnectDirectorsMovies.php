<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConnectDirectorsMovies extends Model
{
    protected $fillable = ['movie_id', 'director_id'];
    function Movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    function Director()
    {
        return $this->belongsTo(Director::class, 'director_id');
    }
}
