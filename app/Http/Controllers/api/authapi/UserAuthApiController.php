<?php

namespace App\Http\Controllers\api\authapi;

use App\Team;
use App\User;
use App\TeamFile;
use App\TeamEvent;
use App\TeamMember;
use App\ChatMessage;
// use Tymon\JWTAuth\JWTAuth;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\MessageConversation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterAuthRequest;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserAuthApiController extends Controller
{
    //
 public $loginAfterSignUp = false;


    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        if ($this->loginAfterSignUp) {
            // dd($this->login($request));
            return $this->login($request);
        }
        $input = $request->only('email', 'password');
        $jwt_token = JWTAuth::attempt($input);

        return response()->json([
            'success' => true,
            'token' => $jwt_token,
            'user' => $user
        ], 200);
    }

    public function login(Request $request)
    {
        $jwt_token = null;
        $input = $request->only('email', 'password');
        if (!$jwt_token = JWTAuth::attempt($input)) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid Email or Password',
            ], 401);
        }else{
            $user=User::where('email',$input['email'])->first();
            return response()->json([
                    'success' => true,
                    'token' => $jwt_token,
                    'user' =>$user,
                ]);
        }

    }

    public function logout(Request $request)
    {
        $this->validate($request, [
            'token' => 'required'
        ]);

        try {
            JWTAuth::invalidate($request->token);

            return response()->json([
                'success' => true,
                'message' => 'User logged out successfully'
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, the user cannot be logged out'
            ], 500);
        }
    }

}
