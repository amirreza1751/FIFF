<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieAwardPicture extends Model
{
    protected $table = 'movie_awards_pictures';

    protected $fillable = [
        'path',
        'movie_id',
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
