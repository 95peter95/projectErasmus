<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable = ['first_name','last_name','email','password','user_type'];

    public function UserMobilities()
    {
        return $this->hasMany('App\UserMobility');
    }

}
