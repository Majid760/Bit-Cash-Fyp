<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImageUrl extends Model
{
    //
    protected $fillable = [
        'product_id','product_img_url',
    ];
    public function product(){
        return $this->belongsTo('App\Product');
    }
}
