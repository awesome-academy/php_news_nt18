<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('profile.index', compact('posts'));
    }

    public function create()
    {

        return view('profile.index');
    }

    public function store(PostRequest $request)
    {
        $request['user_id'] = Auth::id();
        $username = Auth::user()->name;
        $post = Post::create($request->all());

        return redirect()->route('profile.index', compact('username'));
    }

    public function destroy(post $post)
    {
        $post->delete();

        return redirect()->route('profile.index');
    }
}
