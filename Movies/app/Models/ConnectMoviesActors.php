<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConnectMoviesActors extends Model
{
    protected $fillable = ['movie_id', 'actor_id'];

    function Movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    function Actor()
    {
        return $this->belongsTo(Actor::class, 'actor_id');
    }
}
