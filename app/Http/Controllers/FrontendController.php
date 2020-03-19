<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    //


    public function index(){
        // Auth::logout();
        // dd(isset(Auth::user()->name));
        // dd(isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email );

        return view('index');
    }
}
