<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Routing\Controller as Controller;

use Illuminate\Http\Request;

class IamSusbectedReviewController extends Controller
{
     public function index(){
    	return view('admin/iam-susbected-review');
    }
}
