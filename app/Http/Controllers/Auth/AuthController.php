<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\GivePhoneRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function givePhone(GivePhoneRequest $request)
    {
        session('phone', $request->phone);
        if (User::where('phone', $request->phone)->exists()){
            return 'login';
        }else{
            return redirect()->route('auth.send.verification.code');
        }
    }
}
