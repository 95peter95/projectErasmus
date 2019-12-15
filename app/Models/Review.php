<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table='reviews';
    protected $fillable = [
        'author','text', 'picture'];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

}


