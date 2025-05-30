<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Models\Admin;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;


class AdminAuthController extends Controller
{
    public function login(AdminLoginRequest $request) :JsonResponse
    {
        $credentials = $request->only('phone', 'password');
        $admin = Admin::where('phone', $credentials['phone'])
            ->where('password', $credentials['password'])
            ->first();
        $token = $admin->createToken('personal_access_token')->plainTextToken;
        return response()->json([
            'bearer token' => $token,
        ]);
    }

    public function changePassword(ChangePasswordRequest $request): JsonResponse
    {
        $admin = Auth::user()->id;
        Admin::find($admin)
            ->where('password', $request['old_password'])
            ->update(['password' => $request['new_password']]);
        return response()->json([
            'message' =>
                'Your password changed successfully'
        ]);
    }

    public function logout(): JsonResponse
    {
            Auth::guard('web')->logout();
            return response()->json([
                'message' =>
                    'You logged out'
            ]);
        }
}
