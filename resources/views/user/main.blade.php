@extends('layouts.head')


<title>main page</title>

<link href="{{ asset('style/style3.css') }}" rel="stylesheet">
</head>
<body>

<ul>
{{--    <li onclick="toggleNotifi()" class="container-li1"><i class="fa fa-bell" aria-hidden="true"></i></li>--}}
{{--    <a href="{{url('/chat')}}">--}}
{{--        <li class="container-li1"><i class="fa fa-commenting" aria-hidden="true"></i></li>--}}
{{--    </a>--}}
    <a href="{{route('get_AddPost')}}">
        <li class="container-li1" style=""><i class="fa fa-plus" aria-hidden="true"></i></li>
    </a>
</ul>
<!--------------------------------------------------->
{{--<div class="notifi-box" id="box">--}}
{{--    <h2>Notifications <span>17</span></h2>--}}
{{--    <a href="{{url('/notification')}}">--}}
{{--        <div class="notifi-item">--}}
{{--            <img src="imges/user.png" alt="img">--}}
{{--            <div class="text">--}}

{{--                <p>the coronavirus COVID-19 is affecting 200 counteries and territories around the world</p>--}}
{{--                <p>5:12 Pm</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </a>--}}
{{--    <a href="{{url('/notification')}}">--}}
{{--        <div class="notifi-item">--}}
{{--            <img src="imges/user.png" alt="img">--}}
{{--            <div class="text">--}}

{{--                <p>the coronavirus COVID-19 is affecting 200 counteries and territories around the world</p>--}}
{{--                <p>5:12 Pm</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </a>--}}
{{--    <a href="{{url('/notification')}}">--}}
{{--        <div class="notifi-item">--}}
{{--            <img src="imges/user.png" alt="img">--}}
{{--            <div class="text">--}}

{{--                <p>the coronavirus COVID-19 is affecting 200 counteries and territories around the world</p>--}}
{{--                <p>5:12 Pm</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </a>--}}
{{--    <a href="{{url('/notification')}}">--}}

{{--        <div class="notifi-item">--}}
{{--            <img src="imges/user.png" alt="img">--}}
{{--            <div class="text">--}}

{{--                <p>the coronavirus COVID-19 is affecting 200 counteries and territories around the world</p>--}}
{{--                <p>5:12 Pm</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </a>--}}


{{--</div>--}}

<!------------------------------1--------------------------->
<section class="main-section">
    <!----------------------------------2------------------------------>
    @forelse($posts as $post)
        <div class="div-container1">
            <img class="div-container1-uimg" src="{{$post->user->image}}" width="75" height="75">
            <h4 class="div-container1-h3"><a href="/profile/{{$post->user_id}}">{{$post->user->name}}</a></h4>
            <p class="div-container1-p">{{$post->text}}</p>
            @if($post->image != null)
                <img class="div-container1-img" src="{{$post->image}}" width="66%" height="30%">
            @endif
            <ul class="div-container1-ul">
                <a href="">
                    <li style="margin-left: 63px;"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></li>
                </a>
                <a href="">
                    <div class="chat-box">
                        @if(count($post->comment))
                        @foreach($post->comment as $comment)
                           username: <span>{{$comment->user->name}}</span>
                           <h6>comment body :    {{$comment->text}}</h6>

                        @endforeach
                        @endif
                    </div>
                    <li><i class="fa fa-commenting" aria-hidden="true"></i></li>
                </a>
            </ul>

            <div class="div-input">
                <input class="div-container1-input" type="input" name="comment" placeholder="write a comment">
                <i class="fa fa-paper-plane div-container1-i" aria-hidden="true"></i>
            </div>
        </div>
    @empty
        <p class="p-4"> No posts yet. </p>
    @endforelse
    {{$posts->links()}}

</section>
<script src="{{ asset('js/script.js') }}" defer></script>
</body>
</body>
</html>
