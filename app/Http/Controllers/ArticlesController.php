<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ArticlesController extends Controller
{
    
    function Articles(){
     return view('layouts/Articles');
        
    }
    public function show($post_name) {
        $post = \App\Post::where('post_name',$post_name)->first(); //get first post with post_nam == $post_name
        return view('layouts/Articlesingle',array( //Pass the post to the view
            'post' => $post
        ));
     }
 

}


