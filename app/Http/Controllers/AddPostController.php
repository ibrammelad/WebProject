<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddPostController extends Controller
{
      public function index(){
    	return view('user/add-post');
    }
}
