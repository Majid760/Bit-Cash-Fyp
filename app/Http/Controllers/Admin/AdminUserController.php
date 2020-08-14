<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\User;
use App\SubscriberList;
use App\mail\sendEmailToUserByAdmin;

class AdminUserController extends Controller
{
    //

    public function index() {
        $allUser=User::get();
        $pendingUser=0;
        $approvedUser=0;
        foreach($allUser as $user){
            if($user->status==0){
                $pendingUser++;
            }else{
                $approvedUser++;
            }
        }
        $subUser=SubscriberList::get();
        return view('backend.admin.adminside-userlisting',compact('allUser','subUser','pendingUser','approvedUser'));

    }
    public function edit($id){
        $user=User::findOrFail($id);
        return view('backend.admin.editable-user-profile',compact('user'));
    }


    // send email to user by admin
    public function sendEmailToUser(Request $request){
        $this->validate($request,[
            'msgbody' => 'required|string',
            'user_email' => 'required|email',
        ]);

        $user=User::where('email',$request->user_email)->first();
        $data=array();
        $data["firstname"]=$user->firstname;
        $data["lastname"]=$user->lastname;
        $data["message"]=$request->msgbody;
        Mail::to($request->user())->send(new sendEmailToUserByAdmin($data));
        return back()->with('successMsg','Email Has been sent successfully!');

    }

    public function changeUserStatus($id) {

        $userStat=User::where('id',$id)->first();

        if ($userStat->status==1) {
            $userStat->status=0;
        }
        if($userStat->status==0){
            $userStat->status=1;
        }
        if($userStat->save()){
            return redirect()->back();
        }
        else {
            return redirect()->back()->with('error','Status not change!');
        }

    }
}
