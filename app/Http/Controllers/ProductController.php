<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\GenrelCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index(){
        return redirect()->back();
        // return view('frontend.product-detail');
    }

    public function getDetail($id){
        $product=Product::with('productImgsUrls')->where('id',$id)->first();
        $products=Product::where('category_id',$product->category_id)->paginate(48);
        return view('frontend.product-detail',compact('product','products'));
    }

    //get products according to category

    public function getProducts($id){

        if($id!=0){
            $products=GenrelCategory::find($id)->products()->paginate(72);
            return view('index',compact('products'));

        }else{
            return back();
        }
        // return response()->json($products);

    }
}
