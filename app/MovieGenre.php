<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieGenre extends Model
{
    protected $table = 'movie_genres';

    protected $fillable = [
        'name',
    ];
}
