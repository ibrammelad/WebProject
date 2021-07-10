<?php


namespace App\Http\Controllers\Admin;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;

class ReviewNurseController extends Controller
{
     public function index(){
    	return view('admin/review-nurse');
    }

}
