<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Couleur extends Model
{
    protected $guarded = [];
    
    public function artcles()
    {
        return $this->belongsTo('App\Articles');
    }
}
