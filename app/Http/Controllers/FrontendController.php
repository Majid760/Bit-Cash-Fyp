<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Product;

class FrontendController extends Controller
{
    //


    public function index(){
        // $products=Product::all();
        // $catogory=Category::all();
        return view('index');
    }
}
