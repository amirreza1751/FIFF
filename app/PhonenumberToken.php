<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhonenumberToken extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at', 'updated_at', 'created_at'];

    protected $table = 'phonenumber_tokens';

    protected $fillable = [
        'phone_number',
        'token',
        'used'
    ];
}
