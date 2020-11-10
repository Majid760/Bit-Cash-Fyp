<?php

namespace App\Http\Controllers;

use App\Product;
use App\PromotedProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //


    public function findProduct(Request $request){
        $this->validate($request,[
            'searchProduct' => 'required|min:3',
        ]);
         $products = Product::with('productImgsUrls')->where('product_name', 'like','%'.$request->input('searchProduct').'%')->paginate(36);
        // if($products->total()<=0){
        //     $products=Product::with('productImgsUrls')->orderBy(DB::raw('RAND(123)'))->paginate(90);
        //     dd($products->total());

        // }
        $promoData = PromotedProduct::all()->random(12);
        return view('search-product',compact('products','promoData'));
    }
}
