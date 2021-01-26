<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class AdminAuthController extends Controller
{
    
    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $token = Str::random(80);
            Auth::user()->api_token = $token;
            Auth::user()->save();
            $response = [
                'token' => $token,
                'user_email' => $request->email
            ];
            return response()->json(['response', $response], 200);
        }

        return response()->json(['status', 'Email or Password is Wrong'], 403);
    }

    public function logout(){
        Auth::logout();
        return response()->json(['status', 'You are successfully logged out'], 200);
    }
}
