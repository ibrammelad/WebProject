<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthWithController extends Controller
{
    public function github()
    {
        try {

            return Socialite::driver('github')->redirect();

        } catch (\Exception $exception) {
            return redirect()->route('login.page')->with(["error" => "sorry some errors..! try again later"]);
        }

    }

    public function githubRedirect()
    {
        try {

            $social = Socialite::driver('github')->user();
            $user = User::where('token', $social->id)->first();
            if ($user === null) {
                $user = User::Create([
                    'name' => $social->name,
                    'email' => $social->email,
                    'token' => $social->id,
                    'status' => 1 ,
                    'password' => Hash::make(Str::random(24))
                ]);
            }
            Auth::login($user, true);
            return redirect()->route('HomePage');
        } catch (\Exception $exception) {
            return redirect()->route('login.page')->with(["error" => "sorry some errors..! try again later"]);
        }

    }

    public function google()
    {
        try {

            return Socialite::driver('google')->redirect();
        } catch (\Exception $exception) {
            return redirect()->route('login.page')->with(["error" => "sorry some errors..! try again later"]);;;
        }
    }

    public function googleRedirect()
    {
        try {

            $social = Socialite::driver('google')->user();
            $user = User::where('email', $social->email)->first();
            if ($user === null) {
                $user = User::Create([
                    'name' => $social->name,
                    'email' => $social->email,
                    'token' => $social->id,
                    'status' => 1 ,
                    'password' => Hash::make(Str::random(24))
                ]);
            }
            Auth::login($user, true);
            return redirect()->route('HomePage');

        } catch (\Exception $exception) {

            return redirect()->route('login.page')->with(["error" => "sorry some errors..! try again later"]);;;
        }
    }

    public function facebook()
    {
        try {

            return Socialite::driver('facebook')->redirect();
        } catch (\Exception $exception) {
            return redirect()->route('login.page')->with(["error" => "sorry some errors..! try again later"]);;;
        }
    }

    public function facebookRedirect()
    {
        try {
            $social = Socialite::driver('facebook')->user();
//            return dd($social);
            $user = User::where('email', $social->email)->first();
            if ($user === null) {
                $user = User::Create([
                    'name' => $social->name,
                    'email' => $social->email,
                    'token' => $social->id,
                    'status' => 1 ,
                    'password' => Hash::make(Str::random(24))
                ]);
            }
            Auth::login($user, true);
            return redirect()->route('HomePage');

        } catch (\Exception $exception) {

            return redirect()->route('login.page')->with(["error" => "sorry some errors..! try again later"]);;;
        }
    }




}
