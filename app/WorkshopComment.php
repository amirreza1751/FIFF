<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkshopComment extends Model
{
    protected $table = 'workshop_comments';

    protected $fillable = [
        'comment',
        'user_id',
        'workshop_id',
    ];


    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
