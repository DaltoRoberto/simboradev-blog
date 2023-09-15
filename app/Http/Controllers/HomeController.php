<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(10)->get();

       return view('home', compact('posts'));
    }
}
