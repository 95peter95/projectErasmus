<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobility extends Model
{
    protected $fillable = [
    'start_date',
    'end_date',
    'name'];

    public function Challenge()
    {
        return $this->belongsTo('App\Challenge');
    }

}
