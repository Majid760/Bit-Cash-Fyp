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
}
