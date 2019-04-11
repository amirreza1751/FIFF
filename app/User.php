<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'phone_number', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token', 'password'
    ];

    public function workshop_comments()
    {
        return $this->hasMany(WorkshopComment::class);
    }

    public function findForPassport($username) {
        return $this->where('phone_number', $username)->first();
    }

    public function validateForPassportPasswordGrant($password){
        return true;
    }
}
