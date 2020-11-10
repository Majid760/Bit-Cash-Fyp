<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserPaymentSettingController extends Controller
{
    //
    public function __construct() {

    }

    public function index() {

        return view('backend/user/payment-setting');

    }

    public function UseramountTransaction(Request $request){

        $this->validate($request, [
            "cc_name" => "required",
            "cc_number" => "required|numeric",
            "cc_exp_mo" => "required|numeric",
            "expire_year" =>  "required|date|after:tomorrow",
            "amount" => "required|numeric",

        ]);

    }
}
