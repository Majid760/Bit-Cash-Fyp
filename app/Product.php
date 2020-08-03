<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function productImgsUrls()
    {
        return $this->hasMany('App\ProductImageUrl', 'product_id');
    }

    public function store()
    {
        return $this->belongsTo('App\Store');
    }

    public function users() {
        return $this->belongsToMany('App\User','product_id');
    }
}
