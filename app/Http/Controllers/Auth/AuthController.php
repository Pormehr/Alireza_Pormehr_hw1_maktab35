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
        session(['phone' => $request->phone]);
        if ($user = User::where('phone', $request->phone)->first()){
            if ($user->status){
                return redirect()->route('auth.show.login');
            }else{
                return redirect()->back()->withResult([
                    'alert' => 'danger',
                    'message' => "Your Account is Passive and you don't have permission to access your dashboard!",
                ]);
            }
        }else{
            return redirect()->route('auth.send.verification.code');
        }
    }
}
