<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConnectDirectorsMovies extends Model
{
    // A tényleges tábla neve
    protected $table = 'movies_directors';

    // Pivot tábla: nincs autoincrement id
    public $incrementing = false;

    // Nincs klasszikus primary key
    protected $primaryKey = null;

    // Ha nincs created_at / updated_at
    public $timestamps = false;

    // Engedélyezett mezők
    protected $fillable = ['movie_id', 'director_id'];

    // Kapcsolatok
    public function Movie()
    {
        return $this->belongsTo(Movie::class, 'movie_id');
    }

    public function Director()
    {
        return $this->belongsTo(Director::class, 'director_id');
    }
}