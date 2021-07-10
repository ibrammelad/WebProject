@extends('layouts.head')

@section('content')
    <title>add post</title>
    <link href="{{ asset('style/style3.css') }}" rel="stylesheet">

    <body>
    <!----------------------------------add post------------------------>
    <section class="post-section">
        <img src="imges/add-post.jpg" width="35%;" style="margin-top: 130px;
			margin-left: 200px;">

            <div class="add-post">
                <form action="/save-post" method="post" enctype="multipart/form-data">
                    @csrf
                    <img src="{{$user->image}}" width="75">
                    <h1>{{$user->name}}</h1><br>
                    <textarea type="text" name="text" cols="50" rows="7" placeholder="what's in your mind?"></textarea>
                    @error('text')
                    <small class="form-text text-danger ml-5 pl-5">{{$message}}</small>
                    @enderror                    <hr>
{{--                    <ul>--}}
{{--                        <a href="">--}}
{{--                            <li><i class="fa fa-camera" aria-hidden="true"></i></li>--}}
{{--                        </a>--}}
{{--                        <a href="">--}}
{{--                            <li style="border-radius: 30px; background-color:lightgray; padding: 10px 15px;"><i--}}
{{--                                    class="fa fa-paper-plane-o" aria-hidden="true"></i></li>--}}
{{--                        </a>--}}
{{--                        <a href="">--}}
{{--                            <li><i class="fa fa-picture-o" aria-hidden="true"></i></li>--}}
{{--                        </a>--}}
                        <input type="file" name="image" >
                        @error('image')
                        <small class="form-text text-danger ml-5 pl-5">{{$message}}</small>
                        @enderror
                    <button type="submit"> post</button>
{{--                    </ul>--}}
                </form>


            </div>
    </section>
    </body>
    </html>
@endsection
