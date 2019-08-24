<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Task;

class PagesController extends Controller
{
    // 
     public function getIndex(){
          return view('frontend-pages.main');
     }
    public function getContact(){
         return view('frontend-pages.contact');
    }

    public function getBlogg(){
          $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
          return view('frontend-pages.blogg')->withPosts($posts);
     
   }
   
    
}
