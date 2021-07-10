<?php

namespace App\Http\Controllers;

use App\Http\Requests\MakeMeNurseRequest;
use App\Nurse;
use Illuminate\Http\Request;

class NurseController extends Controller
{
    public function index()
    {
        return view('user/nurse');
    }

    public function showMakeMeNurse()
    {
        return view('user/make-me-nurse');
    }

    public function makeMeNurse(MakeMeNurseRequest $request)
    {
        try {
            $input = $request->except('_token');
            $input['status'] = 0;
            $id = auth()->user()->id;
            $input['user_id'] =$id;
            Nurse::create($input);
            return redirect()->route("privacy", $id)->with(["success" => "your request is has been saved and it will review"]);
        } catch (\Exception $e) {
            return redirect()->route("privacy", $id)->with(["error" => "sorry..! try again later"]);
        }
    }

    public function showNurse($id)
    {
        $nurse = Nurse::findOrFail($id);
        return view('user.nurse', compact('nurse'));
    }

}
