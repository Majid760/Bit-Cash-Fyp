<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserDashboardController extends Controller
{
    public function __construct(){
        $this->middleware(array('auth:web'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd(auth()->user()->id);
        $user= User::findOrFail(auth()->user()->id);
        if($user->status==1){
            return view('backend.user.userdash-home');

        } else {
             return('Your Account Has been suspended!');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userProfileData()
    {

        $userData = User::findOrFail(auth()->user()->id);

        return view('backend.user.user-profile',compact('userData'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function passwordReset()
    {
        //
        return view('backend/user/password-reset');
    }

    public function passwordUpdate(Request $request) {

        $id =auth()->user()->id;
        $user = User::findOrFail($id);
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:8|different:old_password',
        ]);

        if(!(Hash::check($request->input('old_password'), $user->password))) {

            return back()->with('message', 'Please provide the correct old password! Thanks');

        }
        $user->password = Hash::make($request->input('password'));
        if($user->save()) {
            return back()->with('message', 'Password updated successfully');
        } else {
            return back()->with('message', 'Your password has not been successfully changed due to some error');
        }



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $this->validator($request->all())->validate();
        $userInfo = User::findOrFail(auth()->user()->id);
        $userInfo->email = $request->email;
        $userInfo->firstname = $request->firstname;
        $userInfo->lastname = $request->lastname;
        $userInfo->address = $request->address;
        $userInfo->city = $request->city;
        $userInfo->country = $request->country;
        $userInfo->about = $request->about;

        if ($userInfo->save()) {
            return back()->with('successMsg', 'Your Personal Info has been updated!');
        } else {
            return back()->with('failureMsg', 'Your Personal Info has not been updated!');
        }

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255'],
            'firstname' => ['string', 'max:255'],
            'lastname' => ['string', 'max:255'],
            'address' => ['string', 'max:255'],
            'country' => ['string', 'max:255'],
            'aboutme' => ['string', 'max:255'],
        ]);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
