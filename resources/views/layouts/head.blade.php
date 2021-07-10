
<!DOCTYPE html>
<html>
<head>
	<title>header</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="414718808369-3qvd0e03k0hsu9psf0ahp57gqtslov4f.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="{{ asset('style/style.css') }}" rel="stylesheet">
</head>

<body>
<header class="header">
	<nav class="header-nav">
		<ul class="header-nav-ul">

			<a href="{{url('/')}}"><li title="home"><i class="fa fa-home" aria-hidden="true"></i> HOME</li></a>
			<a href="{{url('/news')}}"><li title="news"><i class="fa fa-newspaper-o" aria-hidden="true"></i> NEWS</li></a>
			<a href="{{url('/view-helpers')}}"><li title="doctors & nurses"><i class="fa fa-user-md" aria-hidden="true"></i> VIEW DOC &NURSE</li></a>

			<li title="setting">
					<div class="dropdown">
					<button type="button" class="btn text-dark dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs" aria-hidden="true"></i></button>
					<div class="dropdown-menu">
				<img src="imges/user.png" width="50" height="50" style="margin-left: 10px; display: inline-block;position: absolute;">
				<a class="dropdown-item" href="profile/{{auth()->user()->id}}" style="margin-left: 70px; font-size: 30px; width: 35%; border-radius: 20px; display: inline-block;position: relative;">{{ ucfirst(Auth()->user()->name) }}</a>
				<hr>
				<a class="dropdown-item" href="{{url('/hospital')}}" title="nearly places to reach it quickly">
				    <i class="fa fa-hospital-o" aria-hidden="true"></i> <span>Nearly hospitals</span>
					<div class="fa fa-angle-right" aria-hidden="true"></div>
				</a>
				<a class="dropdown-item" href="{{url('/people')}}" title="nearly people have covid with Privacy">
				 <i class="fa fa-users" aria-hidden="true"></i> <span>Nearly people</span>
				 <div class="fa fa-angle-right" aria-hidden="true"></div>
				</a>
				<a class="dropdown-item" href="#" title="how your personal information is used">
					<i class="fa fa-bookmark" aria-hidden="true"></i> <span>Saved</span>
					<div class="fa fa-angle-right" aria-hidden="true"></div>
				</a>
				<a class="dropdown-item" href="{{url('/privacy',Auth()->user()->id)}}" title="how your personal information is used">
					<i class="fa fa-lock" aria-hidden="true"></i> <span>Privacy</span>
					<div class="fa fa-angle-right" aria-hidden="true"></div>
				</a>

				<a class="dropdown-item" href="{{url('/contact-us')}}" title="have a question about your phone or plan? ">
				 <i class="fa fa-phone" aria-hidden="true"></i> <span>Contact us</span>
				 <div class="fa fa-angle-right" aria-hidden="true"></div>
				</a>
				<a class="dropdown-item" href="{{url('/about-us')}}" title="who you are? or what matters to you?">
				 	 <i class="fa fa-info" aria-hidden="true"></i> <span>About us</span>
					 <div class="fa fa-angle-right" aria-hidden="true"></div>
				</a>
				<a class="dropdown-item" href="{{url('logout')}}">
					<i class="fa fa-sign-out" aria-hidden="true" style="background-color: red;"></i> <span>Logout</span>
					<div class="fa fa-angle-right" aria-hidden="true"></div>
				</a>

				</div>
			</div>
			</li>
		</ul>
	</nav>

</header>


   @yield('content')
</body>
</html>
