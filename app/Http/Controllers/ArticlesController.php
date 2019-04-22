<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ArticlesController extends Controller
{
    
    function Articles(){
        $posts = Post::all();
        return view('layouts/Articles',['posts'=>$posts]);
        
    }
 

}


