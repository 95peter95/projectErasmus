<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table='reviews';
    protected $fillable = [
        'author','text', 'picture'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mobility()
    {
        return $this->belongsTo(Mobility::class);
    }

}


