<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class MediaItem extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at', 'updated_at', 'created_at'];

    protected $table = 'media_items';
    protected $fillable = [
        'title',
        'description',
        'link',
        'pic1',
        'pic2',
        'type'
    ];
}
