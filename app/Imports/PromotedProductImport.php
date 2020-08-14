<?php

namespace App\Imports;

use App\PromotedProduct;
use App\Store;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
class PromotedProductImport implements ToCollection, WithHeadingRow, WithBatchInserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    protected $store_info=array();

    public function collection(Collection $rows)
    {
        $i=0;
        foreach ($rows as $row) {


            PromotedProduct::create([
                    //
                'store_id' => $row["stores_info"],
                'store_link' => $row["store_link"],
                'product_info' => $row["products_info"],
                'unit_price' => $row["unit_price"],
                'image_link' => $row["image_link"],
                'product_link' => $row["product_link"],
                'sold_quantity' => $row["sold_quantity"],
                'commission_rate' => $row["commission_rate"],
                'commission' => $row["commission"],
                'relevant_market_commission_rate' => $row["relevant_market_commission_rate"],
                'relevant_market_commission' => $row["relevant_market_commission"],
                ]);
                $this->store_info[$i]=$row["stores_info"];
                $i++;
        }

            // storing stores
            $this->store_info=array_unique($this->store_info);
            foreach($this->store_info as $store=>$value){

                Store::create([
                    'id' => $value,
                ]);

            }
            // dd();

    }



    public function batchSize(): int
    {
        return 300;
    }
}
