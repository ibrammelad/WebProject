<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Routing\Controller as Controller;


use Illuminate\Http\Request;

class IHaveCovidReviewController extends Controller
{
    public function index(){
    	return view('admin/i-have-covid-review');
    }
}
