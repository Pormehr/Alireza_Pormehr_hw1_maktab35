<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $user = User::where('phone', session('phone'))->first();
        if (Hash::check($request->password, $user->password)){
            Auth::login($user);
            session()->forget('phone');
            return 'dashboard'; #TODO create dashboard
        }else{
            return redirect()->route('auth.show.login')->withResult(['message' => 'The Password Is Incorrect!']);
        }
    }
}
