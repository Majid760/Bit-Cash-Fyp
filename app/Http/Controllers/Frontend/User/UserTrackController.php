<?php

namespace App\Http\Controllers\Frontend\User;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class UserTrackController extends Controller
{
    //
    public function addProduct($id) {
        $url=Product::where('id',$id)->first();
        // dd($url->product_url);
        return redirect::to($url->product_url)->send();
        return Redirect::to('https://bla.com/?yken=KuQxIVTNRctA69VAL6lYMRo0');

        // return redirect::away('https://www.google.com');
    }
}
