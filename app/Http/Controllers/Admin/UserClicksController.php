<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use App\User;
class UserClicksController extends Controller
{
    //
    public function index() {
        $users = User::with(['products'])->get();
        return view('backend.admin.user-clicks',compact('users'));
    }
}
