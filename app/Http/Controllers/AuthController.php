<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function showLogin()
    {
        if (!Auth::check()) {
            return view('user/sign-in');
        }
            if (\auth()->user()->status == 0) {
                return view('user/sign-in');
            }
            else
            {
                return redirect()->route('HomePage');
            }
    }

    public function showregistration()
    {
        return view('user/sign-up');
    }

    public function postLogin(Request $request)
    {
        try {
            request()->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->route('HomePage');
            } else
                return redirect()->route('login.page');
        }catch (\Exception $exception)
        {
            return redirect()->route('login.page')->with(['error' => 'oops .... try again later.. !!!']);

        }
    }


    public function postRegistration(Request $request)
    {
        try {
            request()->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'phone'=>'required',
            ]);

            $data = $request->except('_token', 'password');
            $data['password'] = Hash::make($request->password);
            $user = User::create($data);
        $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                 $this->sendSmsToMobile($user);
                return redirect('/veirfy-password');
            }
        }
        catch (\Exception $exception)
        {
            return view('user/sign-up');

        }

    }

    public function home()
    {
        try {
            if (!Auth::check()) {
                return redirect()->route('login.page');
            }

            $posts = Post::orderBy('updated_at', 'DESC')->with('comment')->paginate(40);
            $user = \auth()->user();
            if ($user->status ==1) {
                return view('user/main', compact('posts'));
            }
            else {
                $this->sendSmsToMobile($user);
                return redirect('/veirfy-password');
            }
        }
        catch (\Exception $exception)
        {
            return redirect()->route('login.page')->with(['error' => $exception->getMessage()]);

        }



    }

    public function logout() {
        \Illuminate\Support\Facades\Session::flush();
        Auth::logout();
        return redirect()->route('login.page');
    }


    public function sendSmsToMobile($user)
    {
        $code= rand('1000' , '9999');
        $user->update([
            'code' => $code]);
        $basic  = new \Vonage\Client\Credentials\Basic("6b2b4bc2", "dPc0J07qncR7PGF2");
        $client = new \Vonage\Client($basic);
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("2".$user->phone, '7asb', 'Verification Code : '.$code)
        );

        return $code;

    }
}
