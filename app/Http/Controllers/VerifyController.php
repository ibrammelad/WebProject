<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyController extends Controller
{

    public function GetVerify(){
        return view('user/verify(forget-pass)');
    }

    public function verifiedEmail(Request $request)
    {
        $rules = [
            'code' => 'required|max:4|min:4'
        ];
         $code = auth()->user()->code;
        if ($code == $request->code)
        {
            auth()->user()->update(
                [
                    'status' => '1',
                    'code' => null
                ]);
            return redirect()->route('HomePage');
        }
        else
            return redirect('/veirfy-password')->with(['errors' => 'code is error ask to resend code']);

    }



}
