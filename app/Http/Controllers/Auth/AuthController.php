<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\givePhoneRequest;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }

    public function givePhone(GivePhoneRequest $request)
    {

    }
}
