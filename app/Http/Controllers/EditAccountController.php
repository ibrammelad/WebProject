<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditAccountController extends Controller
{
     public function index(){
    	return view('user/edit-account');
    }
}
