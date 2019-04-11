<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $fillable = [
        'name_fa',
        'name_en',
        'length',
        'format',
        'type_fa',
        'type_en',
        'genre_fa',
        'genre_en',
        'product_year_fa',
        'product_year_en',
        'summary_fa',
        'summary_en',
        'country_fa',
        'country_en',
        'show_subject_fa',
        'show_subject_en',
        'show_date_en',
        'show_date_fa',
        'awards_fa',
        'awards_en',
        'poster',
        'director_picture',
        'trailer',
        'festival_number',
    ];

    public function pictures()
    {
        return $this->hasMany(MoviePicture::class);
    }

    public function award_pictures()
    {
        return $this->hasMany(MovieAwardPicture::class);
    }
}
