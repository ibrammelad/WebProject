<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetSuccessController extends Controller
{
   public function index(){
    	return view('user/reset-success');
    }
}
