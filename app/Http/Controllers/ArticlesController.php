<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ArticlesController extends Controller
{
    
    function Articles(){
     return view('layouts/Articles');
        
    }
 

}


