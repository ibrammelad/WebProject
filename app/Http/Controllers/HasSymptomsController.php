<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HasSymptomsController extends Controller
{
     public function index(){
    	return view('user/has-symptoms');
    }
}
