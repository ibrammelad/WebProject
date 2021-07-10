<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Routing\Controller as Controller;


use Illuminate\Http\Request;

class AddHospitalController extends Controller
{
     public function index(){
    	return view('admin/add-hospital');
    }
}
