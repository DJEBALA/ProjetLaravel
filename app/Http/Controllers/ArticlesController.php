<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    
    function Articles(){
        return view('layouts/Articles');
    }
}
