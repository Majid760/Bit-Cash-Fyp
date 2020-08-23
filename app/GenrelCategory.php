<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenrelCategory extends Model
{
    //

    public function products()
    {
        return $this->hasManyThrough('App\Product', 'App\Category');
    }

    public function categories(){
        return $this->hasMany('App\Category');
    }
}
