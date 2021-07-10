<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
       public function index(){
    	return view('user/privacy');
    }

    public function changeshowName(Request $request)
    {
        $user = User::find($request->user_id);
        $user->showName = $request->showName;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

     public function changeshowMail(Request $request)
        {
        $user = User::find($request->user_id);
        $user->showMail = $request->showMail;
        $user->save();
        return back();
     }

    public function updateHelpPeople(Request $request)
    {
        $user = User::find($request->user_id);
        $user->HelpUsers = $request->HelpUsers;
        $user->save();
        return back();
    }

    public function notifyMe(Request $request)
    {
        $user = User::find($request->user_id);
        $user->showNearly = $request->showNearly;
        $user->save();
        return back();
    }
}
