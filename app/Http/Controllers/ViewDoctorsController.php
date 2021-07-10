<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Nurse;
use App\User;
use Illuminate\Http\Request;

class ViewDoctorsController extends Controller
{
     public function index(){

         $nurses = Nurse::active()->paginate(5);
         $doctors = Doctor::active()->paginate(5);
         $helpUsers = User::where('status' ,'1')->paginate(5);
    	return view('user/view-doctors' , compact('nurses' , 'doctors' , 'helpUsers'));
    }
}
