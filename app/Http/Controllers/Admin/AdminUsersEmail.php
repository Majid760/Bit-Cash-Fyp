<?php

namespace App\Http\Controllers\Admin;

use App\ContactMessag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\sendEmailToUserByAdmin;
use Illuminate\Support\Facades\Mail;

class AdminUsersEmail extends Controller
{
    //

    public function index(){
        $userContEmails=ContactMessag::latest()->get();

        return view('backend.admin.admin-user-email',compact('userContEmails'));
    }
    public function sendemail(Request $request){

        $this->validate($request,[
            'msgbody' => 'required',
            'email' => 'required|email',
        ]);

        $user=ContactMessag::where('email',$request['email'])->first();
        $data=array();
        $data["firstname"]=$user->name;
        $data["message"]=$request['msgbody'];
        Mail::to($request->user())->send(new sendEmailToUserByAdmin($data));
        return back()->with('message','Email Has been sent successfully!');


    }

    // change is_checked status

    public function changeIschecked(){
        $userContEmails=ContactMessag::where('is_checked',0)->get();
        foreach($userContEmails as $userEmail){
            $userEmail->is_checked=1;
            $userEmail->save();
        }
        return redirect()->action('Admin\AdminUsersEmail@index');
    }
}
