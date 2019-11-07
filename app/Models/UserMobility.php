<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMobility extends Model
{

    protected $fillable = [
        'name',
        'price',
        'order_column',
        'body',
        'slug',
        'image'
    ];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Challenge()
    {
        return $this->belongsTo('App\Challenge');
    }

}
