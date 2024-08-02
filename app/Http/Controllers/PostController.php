<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();

        // Get distinct attributes
        $distinctCities = Post::distinct()->pluck('post_city');
        $distinctWants = Post::distinct()->pluck('post_want');
        $distinctGenders = Post::distinct()->pluck('post_gender');
        $distinctTypes = Post::distinct()->pluck('post_type');

        return view('main.allpost')->with([
            'posts' => $posts,
            'distinctCities' => $distinctCities,
            'distinctWants' => $distinctWants,
            'distinctGenders' => $distinctGenders,
            'distinctTypes' => $distinctTypes
        ]);

    }

    function saveImage($photo, $folder)
    {
        //save photo in folder
        $file_extension = $photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = $folder;
        $photo->move($path, $file_name);

        return $file_name;
    }


    public function store(Request $request)
    {


        $file_name = $this->saveImage($request->file('files'), 'images/offers');


        // Create the post
        $id = Auth::id();
        $state = 1;
        $post = Post::create([
            'user_id' => $id,
            'post_content' => $request->post_content,
            'post_img_name' => $file_name,
            'post_city' => $request->city,
            'post_man' => $request->mant,
            'post_title' => $request->title,
            'post_type' => $request->chos,
            'post_want' => $request->wont,
            'post_gender' => $request->gender,
            'post_product_status' => $state,
        ]);

        return response()->json(['success' => 'Post created successfully'], 200);

    }








}
