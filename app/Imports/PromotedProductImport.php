<?php

namespace App\Imports;

use App\PromotedProduct;
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
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {


            PromotedProduct::create([
                    //
                'product_info' => $row["products_info"],
                'unit_price' => $row["unit_price"],
                'image_link' => $row["image_link"],
                'product_link' => $row["product_link"],
                'store_info' => $row["stores_info"],
                'store_link' => $row["store_link"],
                'sold_quantity' => $row["sold_quantity"],
                'commission_rate' => $row["commission_rate"],
                'commission' => $row["commission"],
                'relevant_market_commission_rate' => $row["relevant_market_commission_rate"],
                'relevant_market_commission' => $row["relevant_market_commission"],
                ]);
        }
    }



    public function batchSize(): int
    {
        return 300;
    }
}
