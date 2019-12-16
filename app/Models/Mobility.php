<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobility extends Model
{
    protected $fillable = [
    'start_date',
    'end_date',
    'name',
    'imagelink',
    'text'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

}
