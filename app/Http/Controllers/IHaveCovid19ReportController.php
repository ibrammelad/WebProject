<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IHaveCovid19ReportController extends Controller
{
      public function index(){
    	return view('user/i-have-covid-report');
    }
}
