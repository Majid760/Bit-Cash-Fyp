<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'product_name', 'product_url','product_id','category_id','sale_price','original_price','discount','commission','out_of_stock_date'
   ];

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
