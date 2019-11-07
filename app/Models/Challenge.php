<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    protected $fillable = [
        'type',
        'description',
        'image',
        'content',
        'participation_condition'];

    public function UserMobilities()
    {
        return $this->hasMany('App\UserMobility');
    }
    public function Mobilities()
    {
        return $this->hasMany('App\Mobility');
    }

}
