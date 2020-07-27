<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    //
    public function index() {

        return view('frontend.contact');

    }

    public function sendingEmail(Request $request) {

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            // 'message' => 'required'
        ]);

        $data=array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        );

        Mail::to('themuhmand@gmail.com')->send(new ContactUs($data));
        return back()->with('message','Thanks for contacting us!');

    }
}
