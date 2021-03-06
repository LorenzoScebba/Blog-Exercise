<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    public function posts()
    {
        return $this->hasMany("App\Post", "user_id", "id");
    }

    public function comments()
    {
        return $this->hasMany("App\Comment", "user_id", "id");
    }

    public function role()
    {
        return $this->hasOne("App\Role","id","role_id");
    }

    public function isAdmin(){
        if($this->role->name === "admin"){
            return true;
        }
        return false;
    }

    public function canPost(){
        if($this->role->name === "admin" || $this->role->name === "editor"){
            return true;
        }
        return false;
    }
}
