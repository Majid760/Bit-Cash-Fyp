<?php

namespace App\Http\Controllers\api\authapi;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserAuthApiController extends Controller
{

    public $successStatus= 200;


    // login the user function


    public function login(Request $request) {

        $validator= Validator::make($request->all(),[
            'email'    => 'required|email| max:255',
            'password' => 'required|string|min:6',
        ]);
        if($validator->fails()){
            return response()->json(['error' => $validator->errors()],401);
        }

        if(Auth::attempt(['email' => request('email'), 'password' => request('password')]))
        {
            $user=Auth::user();
            $success['token']=$user->createToken('bit-cach')->accessToken ;
            return response()->json(['successs'=>$success],$this->successStatus);

        }else{
            return response()->json(['error'=> 'Unauthorized'], 401);
        }
    }


    // register the user function

    public function register(Request $request){
        $validator= Validator::make($request->all(),[
            'name'     => 'required|string|max:255',
            'email'    => 'required|email| max:255|unique:users',
            'password' => 'required|string|min:6',
            'c_password' => 'required|string|min:6|same:password',

            ]);
            if($validator->fails()){
                return response()->json(['error' => $validator->errors()],401);
            }
            $input=$request->all();
            $input['password']=Hash::make($input['password']);
            $user=User::create($input);
            $success['token']=$user->createToken('bit-cash')->accessToken;
            $success['name']=$user->name;
            return response()->json(['success'=>$success], $this->successStatus);

     }


    // get the detail the loged in user

    public function logout(Request $request) {

            $request->user()->token()->revoke();
            return response()->json([
                'message' => 'Successfully logged out'
            ]);

    }

    public function getDetails(){

        $user=auth()->user();
        return response()->json(['success'=>$user], $this->successStatus);
    }


}
