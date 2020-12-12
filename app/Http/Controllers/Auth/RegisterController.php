<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.registerCompletion');
    }

    public function store(RegisterRequest $request)
    {
        $request['phone'] = session('phone');
        session()->forget('phone');
        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());
        Auth::login($user);
        return 'dashboard';
    }
}
