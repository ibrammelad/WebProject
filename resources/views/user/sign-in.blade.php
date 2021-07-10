<!DOCTYPE html>
<html>
<head>
	<title>sign in</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="414718808369-3qvd0e03k0hsu9psf0ahp57gqtslov4f.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
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
  <link href="{{ asset('style/style.css') }}" rel="stylesheet">

</head>
<body>

	<div class="signin-div" >
		<h1 class="signin-div-h1">sign in</h1>
		<h3 class="signin-div-h3">let's sign you in </h3>
        @include('layouts.alerts.success')
        @include('layouts.alerts.errors')
		<form action="{{url('post-login')}}" method="POST" class="signin-div-form">
      {{ csrf_field() }}
			<input class="signin-div-input" type="email" name="email" placeholder="email address"><br>
      @if ($errors->has('email'))
      <span class="error">{{ $errors->first('email') }}</span>
      @endif
			<input class="signin-div-input" type="password" name="password" placeholder="password"><br>
      @if ($errors->has('password'))
      <span class="error">{{ $errors->first('password') }}</span>
      @endif
			<input type="checkbox" name="remember me"><span class="checkbox-span">remember me</span><br>
			<button type="submit">sign in</button><br>
			<a href="{{url('/forget-password')}}">forget password</a>
			<h6>or</h6>
			<span class="signin-div-span">don't have account?</span><a href="{{route('signUP.page')}}">Sign up</a>
		</form>
		<ul>
			<a href="{{url('sign_up/github')}}"><li class="fa fa-twitter" aria-hidden="true" style="color:white; background-color: #1ecbe1; "></li></a>
			<a href="{{url('sign_up/google')}}"><li class="fa fa-google" aria-hidden="true" style="color:#e8171d;"></li></a>
			<a href="{{url('sign_up/facebook')}}"><li class="fa fa-facebook" aria-hidden="true" style="color:white; background-color: #040672; "></li></a>


		</ul>
	</div>
<div class="carousel-div">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="imges/pic1.jpg" alt="Los Angeles">
        <div class="carousel-caption d-none d-md-block">

      </div>
      </div>

      <div class="item">
        <img src="imges/pic2.jpg" alt="Chicago" >
         <div class="carousel-caption d-none d-md-block">
      </div>
      </div>

      <div class="item">
        <img src="imges/pic3.jpg" alt="New york" >
      <div class="carousel-caption d-none d-md-block">
      </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>

</body>
</html>
