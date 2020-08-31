<?php

namespace App\Http\Controllers;

use App\Product;
use App\PromotedProduct;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //


    public function findProduct(Request $request){
        $this->validate($request,[
            'searchProduct' => 'required|min:3',
        ]);
        $products = Product::with('productImgsUrls')->where('product_name', 'like','%'.$request->input('searchProduct').'%')->paginate(36);
        $promoData = PromotedProduct::all()->random(12);
        // dd(count($products));
        return view('search-product',compact('products','promoData'));
    }
}
