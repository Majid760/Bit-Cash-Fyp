<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Product;
use App\SubscriberList;
use App\PromotedProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{


    public function __construct() {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $estAmnt=0;
        $products = Product::all();
        foreach ($products as $product){
            if($product->sale_price==null || $product->sale_price==0){
                $estAmnt+=($product->original_price/100)*(str_replace('%','',$product->commission)+0);
            } else {
                $estAmnt+=($product->sale_price/100)*(str_replace('%','',$product->commission)+0);
            }
        }
        $promoProd=PromotedProduct::all();
        foreach($promoProd as $prod){
            $estAmnt+=($prod->unit_price/100)*$prod->commission;
        }

        $totalUser=count(User::all());
        $subUsers=count(SubscriberList::all());
        $totalUser+=$subUsers;
        $totalProduct=count(Product::all());
        $totalPromo=count(PromotedProduct::all());
        return view('backend.admin.admin-dashboard',compact([
            'estAmnt'=>'estAmnt',
            'totalUser'=>'totalUser',
            'subUser'=>'subUsers',
            'totalProduct'=>'totalProduct',
            'totalPromo' =>'totalPromo',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
