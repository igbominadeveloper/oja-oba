<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('role', $role))
            return true;
        return false;
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles))
         foreach ($roles as $role) {
             if ($this->hasRole($role))
                 return true;
         }

         else{
             if ($this->hasRole($roles))
                 return true;
         }
         return false;
    }

}
