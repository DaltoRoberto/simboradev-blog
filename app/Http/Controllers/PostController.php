<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::when($request->has('search'), function($p)use($request){
            $p->where('title', 'like', "%{$request->get('search')}%");
        })->paginate();

        return view('posts.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', "=", $slug)->first();

        return view('posts.show', compact('post'));
    }

    public function search(Request $request)
    {
        $indexRoute = route('posts.index');

        return redirect("{$indexRoute}?search=".$request->get('search')."&page=1");
    }
}
