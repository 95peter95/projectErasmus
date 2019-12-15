<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable = ['first_name','email','password'];

    public function UserMobilities()
    {
        return $this->hasMany('App\UserMobility');
    }

    public function Reviews()
    {
        return $this->hasMany('App\Review');
    }

}
