<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\User\UserLoginRequest;
use App\Http\Requests\User\UserRegisterRequest;
use \Illuminate\Http\JsonResponse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function login(UserLoginRequest $request): JsonResponse
    {
        $credentials = $request->only('phone', 'password');
        $user = User::where('phone', $credentials['phone'])
            ->where('password', $credentials['password'])
            ->first();

        $token = $user->createToken('personal_access_token')->plainTextToken;
        return response()->json([
            'bearer token' => $token,
        ]);
    }

    public function register(UserRegisterRequest $request): JsonResponse
    {
        $credentials = $request->only('phone', 'name', 'email', 'password');
        info($credentials);
        $user = User::create([
            'phone' => $credentials['phone'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
            'name' => $credentials['name'],

        ]);
        $token = $user->createToken('personal_access_token')->plainTextToken;
        return response()->json([
            'bearer token' => $token,
        ]);
    }

    public function changePassword(ChangePasswordRequest $request): JsonResponse
    {

        $user = Auth::user()->id;
        User::find($user)
            ->where('password', $request['old_password'])
            ->update(['password' => $request['new_password']]);
        return response()->json([
            'message' =>
                'Your password changed successfully'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        return response()->json([
            'message' =>
                'You logged out'
        ]);

    }
}
