<?php

namespace App\Http\Controllers\Frontend\User;

use App\User;
use App\PaymentAccount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserAccountController extends Controller
{
    //

    public function index() {
        // dd(Auth::user()->email);
        // $UserCashback=PaymentAccount::select('approved_amount')->where('email',Auth::user()->email)->get();
        // $cashback=0;
        // foreach($UserCashback as $userc){
        //     $cashback+=$userc->approved_amount;
        // }
        return view('backend.user.userdash-home');
    }

    public function accountHistory() {
        // retrive the all data and send back to view
        $users = User::with(['products'])->where('id',auth()->guard('web')->user()->id)->get();
    //    dd('this is new technology');
        return view('backend.user.useraccount-activity',compact('users'));
    }

    public function transactionData(Request $request){

        $transactionData=0;
        return view('backend.user.useraccount-activity',compact('transactionData'));

    }
}
