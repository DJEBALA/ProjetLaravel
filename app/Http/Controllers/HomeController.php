<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class HomeController extends Controller
{
/*
La fonction index nous permet 
de récupérer la view welcome
*/
function index(){       
  $posts = Post::take(3)->skip(7)->get();
  return view('welcome',['posts'=>$posts]);
}

}
