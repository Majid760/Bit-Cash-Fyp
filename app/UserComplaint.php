<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserComplaint extends Model
{
    //
    protected $fillable = [
        'user_id','email','message','issue_type','is_solved','is_checked'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
