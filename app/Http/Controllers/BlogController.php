<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function getIndex() {
        $post = Post::paginate(3);

        return view('blogg.index')->withPosts($post);
    }

    public function getSingle($slug) {
        $post = Post::where('slug','=', $slug)->first();

        return view('blogg.single')->withPost($post);
    }   
}
