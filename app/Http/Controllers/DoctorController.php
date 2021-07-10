<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Http\Requests\MakeMeDoctorRequest;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
    	return view('user/doctor');
    }
    public function showMakeMeDoctor(){
        return view('user/make-me-doctor');
    }

    public function storeDoctor(MakeMeDoctorRequest $request)
    {

        try {
            $input = $request->except('_token' , 'img');

            //save photo
            $file_extension= $request->img->getClientOriginalExtension();
            $file_name= time().'.'.$file_extension;
            $path ='images/doctors';
            $request->img->move($path,$file_name);
            ///////////
            $input['img'] = $file_name;
            $input['status'] = 0;
            $id = auth()->user()->id;
            $input['user_id'] =$id;
            Doctor::create($input);
            return redirect()->route("privacy", $id)->with(["success" => "your request is has been saved and it will review"]);
        } catch (\Exception $e) {
            return redirect()->route("privacy", $id)->with(["error" => "sorry..! try again later"]);
        }
    }



    public function showDoctor($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('user.doctor', compact('doctor'));
    }
}
