<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\PromotedProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    //
    public function index(){
        // $catogory=Category::with('products')->get();
        $products=Product::with('productImgsUrls')->orderBy(DB::raw('RAND(123)'))->paginate(90);
        $promoData = PromotedProduct::all()->random(12);

        return view('index',compact('products','promoData'));
    }

    // return about page
    public function getAbout(){
        return view('frontend.about');
    }

    //return contact pagespeed

    public function getBlog(){
        return view('frontend.blog');
    }


}
