<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ArticlesController extends Controller
{
    /*
    la fonction articles permet de renvoyer la view 
    Articles avec tous les articles dans un tableau posts
    */
    function Articles(){
        $posts = Post::all();
        return view('layouts/Articles',['posts'=>$posts]);
     }

  
    public function show($post_name) {
        //avoir le premier post avec post_nam == $post_name
        $post = \App\Post::where('post_name',$post_name)->first(); 
        //Passer le post à la view Articlessingle
        return view('layouts/Articlesingle',array( 
            'post' => $post
        ));
     }
 

}


