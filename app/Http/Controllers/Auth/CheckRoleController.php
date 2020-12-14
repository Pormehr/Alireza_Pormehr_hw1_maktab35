<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRoleController extends Controller
{
    public function __invoke()
    {
        switch (Auth::user()->role){
            case 'customer':
                return redirect()->route('customer.index');
            case 'admin':
                return redirect()->route('admin.index');
            case 'super_user':
                return redirect()->route('super_user.index');
        }
    }
}
