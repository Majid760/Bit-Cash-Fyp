<?php

namespace App\Http\Controllers;

use App\ContactMessag;
use App\UserComplaint;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
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
            'message' => 'required'
        ]);


        $data=array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        );

        Mail::to('bitcash@support.com')->send(new ContactUs($data));
        ContactMessag::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message'],
            'is_checked' => 0,
           ]);
        return back()->with('message','Thanks for contacting us!');

    }
}
