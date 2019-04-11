<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkshopPicture extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at', 'updated_at', 'created_at'];

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
