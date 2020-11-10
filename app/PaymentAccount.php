<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentAccount extends Model
{
    //
    protected $fillable = ['email','commission','pending_amount','approved_amount','payment_amount'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function credit(){
        return $this->hasOne('App\Credit','id');
    }
    public function TransactionHistory(){
        return $this->hasOne('App\TransactionHistory','id');
    }

    public function payment_account(){
        return $this->belongsTo('App\PaymentAccount');
    }

}
