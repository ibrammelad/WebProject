<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Routing\Controller as Controller;
use App\Doctor;
use Illuminate\Http\Request;

class ReviewDoctorController extends Controller
{
    ////////////////////view requested doctor///////////////
     public function index(){
     	 $doctors = Doctor::join('users','users.id','=','doctors.user_id')->select('doctors.*','users.name')->get();
        return view('admin/review-doctors',compact('doctors'));
    	
    }
    ///////////////////// changeStatus to accept or refusel doctor/////////////
     public function changeStatus(Request $request)
    {
         $doctor = Doctor::find($request->user_id);
        $doctor->status = $request->status;
        $doctor->save();
  
        return response()->json(['success'=>'Status change successfully.']);
    }
}
