<!DOCTYPE html>
<html>
<head>

	<title>profile</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link href="{{ asset('style/style4.css') }}" rel="stylesheet">
</head>
<body>
	<section class="profile">
		<div class="profile-div1">
			<h1> Profile </h1>
			<img src="{{$user->image}}" height="150px">
		    <h3 style="color: #2196F3; font-family: cursive;">user name: {{ucfirst( $user->name) }} </h3>
		    <h3 style="color:  #2196F3; font-family: cursive;">user email: {{ $user->email }}</h3>
		</div>
        @if(auth()->user()->id == $user->id)
		<div class="profile-div2">
			<ul class="container-ul">
			<li class="container-ul-li">
				<div>
				<i class="fa fa-user" aria-hidden="true"></i>
				<h3>I have covid-19</h3><br>
				<span>sorry for you, but to make other people take care</span>
				</div>
				<label class="switch">
				  <input type="checkbox" name="checkCovid" >
				<a href="{{url('/have-covid-report')}}"><span class="slider round"></span></a>
				</label>

			</li>
			<li class="container-ul-li">

				<div>
				<i class="fa fa-user" aria-hidden="true"></i>
				<h3>I am susbected to have covid-19</h3><br>
				<span>sorry for you, please active state to alert people</span>
				</div>
				<label class="switch">
				  <input type="checkbox" name="checkUser"  >
				  <a href="{{url('/iam-susbected')}}"> <span class="slider round"></span></a>
				</label>
			</li>
			<li class="container-ul-li">
				<div>
					<i class="fa fa-user" aria-hidden="true"></i>
				<h3>Has symptoms of covid-19</h3><br>
				<span>sorry for you, but to make other people take care</span>
				</div>
				<label class="switch">
				  <input type="checkbox" name="checkName"  >
				  <a href="{{url('/has-symptoms')}}"> <span class="slider round"></span></a>
				</label>
			</li>
			<li class="container-ul-li">

				<div>
					<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
				<h3>edit account</h3><br>
				<span>change name, email or address </span>
				</div>
				<a href="{{url('/edit-account')}}"><div class="fa fa-angle-right" aria-hidden="true"></div></a>

			</li>
			<li class="container-ul-li">

				<div>
					<i class="fa fa-lock" aria-hidden="true"></i>
				<h3>change password</h3><br>
				<span>change your password if you need </span>
				</div>
				<a href="{{url('/change-password')}}"><div class="fa fa-angle-right" aria-hidden="true"></div></a>

			</li>

		</ul>
		</div>
        @endif
	</section>
</body>
</html>
