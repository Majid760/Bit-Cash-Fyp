<?php

namespace App\Http\Controllers\Frontend\User;

use App\User;
use App\UserComplaint;
use Illuminate\Facades\Auth;
use Illuminate\Http\Request;
use App\Mail\CustomerSupport;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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
        Mail::to('bitcash@support.com')->send(new CustomerSupport($data));
        UserComplaint::create([
             'user_id' => Auth()->user()->id,
             'message' => $request['message'],
             'issue_type' => $request['issue_type'],
             'is_solved' => 0,
             'is_checked' => 0,
            ]);
            return back()->with('message','Thanks for contacting us!');


    }
}
