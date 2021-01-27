<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $guarded = [];

    public function articles()
    {
        return $this->belongsTo('App\Articles');
    }
}
