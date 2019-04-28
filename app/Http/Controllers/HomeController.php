<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { // renvoyer les 3 dérniers Articles vers la view welcome  
        $post = Post::take(3)->skip(7)->get();
        return view('welcome',['posts'=>$post]);
    }
}
