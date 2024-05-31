<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Invalid data provided'], 400);
        }

        // Authenticate the user
        if (Auth::attempt($validator->validated())) {
            $user = Auth::user();
            
            $token = $user->createToken('HMQuotes')->accessToken;

            return response()->json(['token' => $token], 200);
        }

        // Authentication failed
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
