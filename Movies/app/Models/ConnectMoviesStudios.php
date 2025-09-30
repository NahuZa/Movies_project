<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConnectMoviesStudios extends Model
{
    // A tényleges tábla neve
    protected $table = 'movies_studios';

    // Pivot tábla: nincs autoincrement id
    public $incrementing = false;

    // Nincs klasszikus primary key
    protected $primaryKey = null;

    // Ha nincs created_at / updated_at
    public $timestamps = false;

    protected $fillable = ['studios_id', 'movie_id'];

    function Studio()
    {
        return $this->belongsTo(Studio::class, 'studios_id');
    }

    function Movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }
}
