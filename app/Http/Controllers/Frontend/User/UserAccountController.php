<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    //

    public function index() {
        return view('backend.user.userdash-home');
    }
}
