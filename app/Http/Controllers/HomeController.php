<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $posts = Post::all();
        //SELECT * FROM posts

        return view('homepage', compact('posts'));
    }

    public function add_post()
    {
        return view('add_post');
    }

    public function view($id)
    {
        $post = Post::where('id', $id)->first();
        // SELECT * FROM post WHERE id = $id

        return view('view', compact('post'));
    }
}
