<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens , HasRoles;

    use SoftDeletes;
    protected $dates = ['deleted_at', 'updated_at', 'created_at'];
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

    /**
     * defer to the Spatie package for role scope
     */
    public function scopeHasRoles(\Illuminate\Database\Eloquent\Builder $query, $roles)
    {
        return $this->scopeRole($query, $roles);
    }
}
