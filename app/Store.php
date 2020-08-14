<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    //
    protected $fillable=[
        'id',
    ];

    public function product() {
        return $this->hasMany('App\Product');
    }

    public function PromotedProducts(){
        return $this->hasMany('App\PromotedProducts');
    }
}
