<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromotedProduct extends Model
{
    //
    protected $fillable=[
        'unit_price', 'product_info', 'image_link', 'product_link',
        'store_info', 'store_link', 'sold_quantity',
        'commission_rate', 'commission',
        'relevant_market_commission_rate',
        'relevant_market_commission',

    ];












}
