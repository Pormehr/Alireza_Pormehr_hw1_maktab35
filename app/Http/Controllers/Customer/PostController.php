<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Auth::user()->posts()->with(['tags', 'categories'])->paginate(6);
        return view('customer.posts.index')->withPosts($posts);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Post $post)
    {
        if (Auth::id() == $post->author->id){
            return view('customer.posts.show')->withPost($post);
        }else{
            abort(403);
        }
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        if (Auth::id() == $post->author->id){
            $post->delete();
            return redirect()->route('customer.post.index')->withResult([
                'alert' => 'danger',
                'message' => "$post->title deleted successfully!",
                ]);
        }else{
            abort(403);
        }
    }
}
