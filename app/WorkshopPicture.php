<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkshopPicture extends Model
{
    protected $table = 'workshop_pictures';

    protected $fillable = [
        'path',
        'workshop_id',
    ];


    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }

}
