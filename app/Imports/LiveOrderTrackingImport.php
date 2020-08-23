<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use App\LiveOrderTracking;

class LiveOrderTrackingImport implements ToCollection, WithHeadingRow, WithBatchInserts
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {


        foreach($rows as $row) {
            LiveOrderTracking::create([
                'OrderTime' => $row['ordertime'],
                'TransactionTime' => $row['transactiontime'],
                'OrderID' => $row['orderid'],
                'SubOrderID' => $row['suborderid'],
                'ProductId' => $row['productid'],
                'ProductURL' => $row['producturl'],
                'OrderStatus' => $row['orderstatus'],
                'CommissionRate' => $row['commissionrate'],
                'PaymentAmount' => $row['paymentamount'],
                'EstimatedCommission' => $row['estimatedcommission'],
                'FinalPaymentAmount' => $row['finalpaymentamount'],
                'Commission' => $row['commission'],
                'TrackingId' => $row['trackingid'],
                'DP' => $row['dp'],
                'AF' => $row['af'],
                'CN' => $row['cn'],
                'CV' => $row['cv'],
                'basicCommissionRate' => $row['basiccommissionrate'],
                'IncentiveCommissionRatebyGMV' => $row['incentivecommissionratebygmv'],
                'IncentiveCommissionRatenewbuyer' => $row['incentivecommissionratenewbuyer'],
                'device' => $row['device'],
                'country' => $row['country'],
                'category_id' => $row['category_id'],
                'publisher_level' => $row['publisher_level'],
                'is_aff_product' => $row['is_aff_product'],
                'newbuyer' => $row['newbuyer'],
                'is_hot_product' => $row['is_hot_product'],
                'new_buyer_bonus' => $row['new_buyer_bonus'],
                'type of income' => $row['type_of_income'],
                'currency' => $row['currency'],
                'originalFinalPaymentAmount' => $row['originalpaymentamount'],
                'exchange rate' => $row['exchange_rate'],
                'Seller Type' => $row['seller_type'],
            ]);

        }




    }


    public function batchSize(): int
    {
        return 400;
    }

}
