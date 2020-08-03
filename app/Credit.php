<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    //
    public function paymentAccount() {
        return $this->belongsTo('App\PaymentAccount');
    }
}
