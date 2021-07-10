<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Routing\Controller as Controller;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
     public function index(){
    	return view('admin/login-admin');
    }
}
