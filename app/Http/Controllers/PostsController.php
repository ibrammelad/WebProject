<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends Controller
{

    public function addPost()
    {
        $user = auth()->user();
        return view('user.add-post' , compact('user'));
    }

    public function storePost(Request $request)
    {
//        try {

            $rules = [
                'text' => 'required|string',
                'image' => 'mimes:jpg,jpeg,png'
            ];
            $user = auth()->user();
            $this->validate($request, $rules);
            $data = $request->except('_token');
            if ($request->hasFile('image')) {
                $file_extension = $request->image->getClientOriginalExtension();
                $file_name = Str::random(30) . '.' . $file_extension;
                $path = 'images/posts/users/';
                $request->image->move($path, $file_name);
                $data['image'] = $file_name;
            }

            $data['user_id'] = $user->id;
            Post::create($data);
            return redirect()->route('HomePage');
//        }catch (\Exception $exception)
//        {
//            return back();
//        }

    }

}
