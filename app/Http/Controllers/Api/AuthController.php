<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\OptNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class AuthController extends Controller
{
    function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $otp = rand(1000, 9999);
        $user->password = Hash::make($otp);
        $user->save();

        $data = [
            'message' => "Dear $user->name, your otp is $otp, please don't share with anyone"
        ];
        Notification::send($user, new OptNotification($data));

        return response()->json(
            [
                'status' => 201,
                'success' => true,
                'message' => "We have sent your an email please check your otp"
            ]
        );
    }

    function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'success' => false,
                'status' => 403,
                'message' => 'Invalid username or password'
            ]);
        }

        $token = $user->createToken($request->email)->plainTextToken;
        return response()->json([
            'success' => true,
            'status' => 200,
            'message' => 'Login success',
            'token' => $token
        ]);
    }

    function logout(Request $request)
    {
        $user  = Auth::user();
        $user->tokens()->delete();

        return response()->json([
            'success' => true,
            'status' => 200,
            'message' => 'logout success',
        ]);
    }
}
