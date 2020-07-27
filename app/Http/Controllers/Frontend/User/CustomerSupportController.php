<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerSupport;
use App\User;
class CustomerSupportController extends Controller
{
    //

    public function index() {

        $id=auth()->user()->id;
        $userData =User::findOrFail($id);
        return view('backend/user/customer-support', compact('userData'));

    }

    public function sendingEmail(Request $request) {

        // dd(env('MAIL_USERNAME');
        $this->validate($request, [

            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'issue_type' => 'required|string',
            'message' => 'required',
        ]);
        $data=array(
            'name' => $request['name'],
            'email' => $request['email'],
            'message' => $request['message'],
        );

        Mail::to('themuhmand@gmail.com')->send(new CustomerSupport($data));
            return back()->with('message','Thanks for contacting us!');


    }
}
