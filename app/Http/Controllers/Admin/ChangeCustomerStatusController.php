<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ChangeCustomerStatusController extends Controller
{
    public function __invoke(Request $request, User $customer)
    {
        if ($customer->status != $request->status){
            $customer->status = $request->status;
            $customer->save();
            return redirect()->back()->withResult([
                'alert' => 'warning',
                'message' => 'The status of this user changed successfully',
            ]);
        }else{
            return redirect()->back()->withResult([
                'alert' => 'info',
                'message' => 'The new status was the same with old status',
            ]);
        }
    }
}
