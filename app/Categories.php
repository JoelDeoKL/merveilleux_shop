<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $guarded = [];

    public function articles()
    {
        return $this->hasMany('App\Articles');
    }
}