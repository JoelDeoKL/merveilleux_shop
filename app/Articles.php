<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $guarded = [];

    public function categories()
    {
        return $this->belongsTo('App\Categories');
    }

    public function taille()
    {
        return $this->hasMany('App\Taille');
    }

    public function couleur()
    {
        return $this->hasMany('App\Couleur');
    }
}
