<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Facades\Auth;
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

        dd($request->input('issue-type'));


    }
}
