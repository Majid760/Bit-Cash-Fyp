<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\mail\NotificationByAdmin;
use App\SubscriberList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class AdminSubScribedUserController extends Controller
{
    //
    public function index(){
        $users=User::all();
        $subUsers=SubscriberList::all();
        return view('backend.admin.subscribed-user',compact('users','subUsers'));
    }


    public function sendEmail(Request $request){
        $this->validate($request,[
            'msgbody' => 'required'

        ]);

        $data['message']=$request->get('msgbody');
        if($request->get('user-type')=='all'){
            $users=User::all();
            foreach($users as $user){
                Mail::to($request->email)->send(new NotificationByAdmin($data));
            }
            return back()->with('message','Emails have been sent to all users successfully');

        }
        elseif($request->get('user-type')=='subscribe'){
            $subs=SubscriberList::all();
            foreach($subs as $sub){
                Mail::to($sub->email)->send(new NotificationByAdmin($data));
            }
            return back()->with('message','Emails have been sent to all subscribed users successfully');

        }
        else{
            return back()->with('message','Please select type of users to them this email has to be submitted');

        }



    }
}
