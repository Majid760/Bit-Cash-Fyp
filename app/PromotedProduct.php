<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromotedProduct extends Model
{
    //
    protected $fillable=[
        'unit_price', 'product_info','store_id','store_link','image_link', 'product_link',
        'sold_quantity','commission_rate', 'commission','relevant_market_commission_rate',
        'relevant_market_commission'
    ];


    public function store() {
        return $this->belongsTo('App\Store');
    }













}
