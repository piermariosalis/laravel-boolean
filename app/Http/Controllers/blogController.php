<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Post;



class blogController extends Controller
{
    public function blog()
    {
        return view('blog');
    }
}

$posts = Post::all();