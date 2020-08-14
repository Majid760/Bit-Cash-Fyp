<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'id',
        'category_name'
    ];

    public function products() {
        return $this->hasMany('App\Product');
    }

    public function genrel_category(){
        return $this->belongsTo('App\GenrelCategory');
    }
}
