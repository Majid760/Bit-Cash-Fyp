<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMessag extends Model
{
    //
    protected $fillable = [
        'name','email','subject','message','is_checked',
    ];
}
