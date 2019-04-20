<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
/*
La fonction index nous permet 
de récupérer la view welcome
*/
function index()
{
  return view('welcome');
}

}
