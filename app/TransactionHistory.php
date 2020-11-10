<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    //
    public function paymentAccount(){
        return $this->belongsTo('App\PaymentAccount');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
