<?php

namespace Modules\User\src\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\User\UserLoginRequest;
use App\Http\Requests\User\UserRegisterRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Modules\User\Models\User;

class UserAuthController extends Controller
{
    public function loginPage(): View
    {
        return view('User::userLayout');
    }
    public function registerPage(): View {
            return view('User::register');
    }

    public
    function register(UserRegisterRequest $request)
    {
        $credentials = $request->only('phone', 'name', 'email', 'password');
        $user = User::create([
            'phone' => $credentials['phone'],
            'email' => $credentials['email'],
            'password' => bcrypt($credentials['password']),
            'name' => $credentials['name'],

        ]);
        return redirect()->route('dashboard',['user' => $user]);
    }
    public function login(UserLoginRequest $request): \Illuminate\Http\RedirectResponse
    {
        $credentials = $request->only('phone', 'password');
        $user = User::where('phone', $credentials['phone'])
            ->where('password', $credentials['password'])
            ->firstOrFail();

        $user->createToken('personal_access_token')->plainTextToken;

        return  redirect()->route('dashboard');
    }


    public function dashboard()
    {

        if(Auth::check()) {
            $user = Auth::user();
            return view('User::dashboard', ['user' => $user]);
        }
        return redirect()->route('login-page');

    }


    public
    function changePassword(ChangePasswordRequest $request): JsonResponse
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

    public
    function logout(Request $request)
    {
        $providers = App::getLoadedProviders();
        info($providers);
        /* Auth::guard('web')->logout();
         return response()->json([
             'message' =>
                 'You logged out'
         ]);*/

    }
}
