<?php

namespace App\Imports;

use App\Product;
use App\Category;
use App\GenrelCategory;
use App\ProductImageUrl;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class ProductImport implements ToCollection, WithHeadingRow, WithBatchInserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    private $categoryId;
    private $categoryName;

    public function collection(Collection $rows)
    {

        $product=Product::all();
        $productId=count($product)+1;
        // $categoryId=
        foreach ($rows as $row)
        {

            $this->categoryId=$row["categoryid"];
            $this->categoryName=$row["category_name"];

            Product::create([
                'category_id' => $row["categoryid"], // As foreign key entry
                'product_name' => $row["product_name"],
                'product_id' => $row["productid"],
                'product_url' => $row["product_url"].'?af=MAK7600ABD3299',
                'original_price' => $row["originalprice"],
                'sale_price' => $row["saleprice"],
                'commission' => $row["commission_rate"],
                'out_of_stock_date' =>$row["out_of_stock_date"],
                'discount' => $row["discount"],
            ]);



            // formatting the product image urls
            $urlToStore=array();
            $urls=explode( ",", $row["allimageurls5"]);
            for($i=0; $i<count($urls)-1; $i++){

                $urlToStore[$i] = $urls[$i];

            }

            // storing the product image urls
            foreach($urlToStore as $url){

                ProductImageUrl::create([
                    'product_id' => $productId,  // as foreign key
                    'product_img_url' => $url,

                ]);

            }
            $productId++;

        }

        // storing the catogory

         Category::create([
             'id' =>  $this->categoryId, // as primary key
             'category_name' => $this->categoryName,
             'genrel_category_id' => 24,
        ]);



    }

    // public function headingRow(): int
    // {
    //     return 2;
    // }

    public function batchSize(): int
    {
        return 400;
    }


}
