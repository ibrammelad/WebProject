<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function showProfile($id)
     {
         $user = User::findOrFail($id);
         return view('user.Profile', compact('user'));
    }
}
