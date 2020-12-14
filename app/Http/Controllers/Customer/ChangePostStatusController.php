<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ChangePostStatusController extends Controller
{
    public function __invoke(Request $request, Post $post)
    {
        if ($post->status != $request->status){
            $post->status = $request->status;
            $post->save();
            return redirect()->back()->withResult([
                'alert' => 'warning',
                'message' => 'The status of this post changed successfully',
            ]);
        }else{
            return redirect()->back()->withResult([
                'alert' => 'info',
                'message' => 'The new status was the same with old status',
            ]);
        }

    }
}
