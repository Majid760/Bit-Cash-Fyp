<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentAccount extends Model
{
    //

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function credit(){
        return $this->hasOne('App\Credit','id');
    }
    public function TransactionHistory(){
        return $this->hasOne('App\TransactionHistory','id');
    }

}
