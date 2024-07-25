<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        /**
         * للحمايه هذه بحيث من تريد يوصلون للمواقع الي لازم مسجل بيه دخول نخلي هذه
         */
        // v27
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();
        return view('main.allpost')->with('posts', $posts);
    }

}
