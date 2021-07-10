<!DOCTYPE html>
<html>
<head>
  <title>sign up</title>
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
  <link href="{{ asset('style/style.css') }}" rel="stylesheet">

</head>
<body>

  <div class="signin-div" >
    <h1 class="signin-div-h1">sign up</h1>
    <img src="imges/user.png" style="width: 75px; height: 77px; margin-bottom: 15px; margin-top: 15px; border-radius: 30px; margin-left: 200px;">
    <form action="{{url('post-registration')}}" method="POST" class="signin-div-form">
      {{ csrf_field() }}
      <input class="signin-div-input" type="name" name="name" placeholder="name"><br>
      @if ($errors->has('name'))
      <span class="error">{{ $errors->first('name') }}</span>
      @endif
      <input class="signin-div-input" type="email" name="email" placeholder="email address"><br>
      @if ($errors->has('email'))
      <span class="error">{{ $errors->first('email') }}</span>
      @endif
      <input class="signin-div-input" type="text" name="phone" placeholder="phone"><br>
      @if ($errors->has('phone'))
      <span class="error">{{ $errors->first('phone') }}</span>
      @endif
      <input class="signin-div-input" type="password" name="password" placeholder="password"><br>
      @if ($errors->has('password'))
      <span class="error">{{ $errors->first('password') }}</span>
      @endif
      <button type="submit">sign up</button><br>
      <span class="signin-div-span">already have account?</span><a href="/loginUser">Sign in</a>
    </form>
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
