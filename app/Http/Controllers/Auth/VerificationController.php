<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class VerificationController extends Controller
{
    public function sendVerificationCode()
    {
        $phone = session('phone');
        $code = $this->setVerificationCode(5);
        $ttl = 2 * 60;
        Log::info("$phone 's verification code is: $code");
        Cache::put($phone, $code, $ttl);
        return view('auth.verifyCode');
    }

    public function verifyPhone(Request $request)
    {
        $phone = session('phone');
        $code = $request->code;
        $verificationCode = Cache::get($phone);
        if (isset($code) && $verificationCode != NULL && $verificationCode == $code){
            Cache::forget($phone);
            //
        }else{
            Cache::forget($phone);
            return redirect()->route('auth.send.verification.code')->withResult(['message' => "Wrong Code!\nTry again with new code"]);
        }
    }

    public function setVerificationCode($count): int
    {
        return rand((10 ** $count), (10 ** ($count + 1) - 1));
    }
}
