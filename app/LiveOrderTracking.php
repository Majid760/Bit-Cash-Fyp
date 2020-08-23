<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiveOrderTracking extends Model
{
    //
    protected $fillable = [
        'OrderTime','TransactionTime','OrderID','SubOrderID','ProductId','ProductURL','OrderStatus','CommissionRate','PaymentAmount',
        'EstimatedCommission','FinalPaymentAmount','Commission','TrackingId','DP','AF','CN','CV',
        'basicCommissionRate','IncentiveCommissionRatebyGMV','IncentiveCommissionRatenewbuyer','device',
        'country','category_id','publisher_level','is_aff_product','newbuyer','is_hot_product','new_buyer_bonus',
        'type of income','currency','originalFinalPaymentAmount','exchange rate','Seller Type'
    ];


}
