<?php

namespace App\Http\Controllers\Frontend\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAccountController extends Controller
{
    //

    public function index() {
        return view('backend.user.userdash-home');
    }

    public function accountHistory() {
        // retrive the all data and send back to view
        $users = User::with(['products'])->where('id',auth()->guard('web')->user()->id)->get();
        return view('backend.user.useraccount-activity',compact('users'));
    }

    public function transactionData(Request $request){

        $transactionData=0;
        return view('backend.user.useraccount-activity',compact('transactionData'));

    }
}
