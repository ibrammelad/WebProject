<!DOCTYPE html>
<html>
<head>	
	<title>forget password</title>
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
	<section class="forget-section">
		<div class="forget-img">
			<img src="imges\forget-pic.jpg">
		</div>
		<div class="forget-form">
			<h1 class="forget-form-h1">Forgot </h1>
		    <h1 class="forget-form-h1">Password ?</h1>
		    <h4 class="forget-form-h4">please enter your email address below</h4>
		    <form action="{{url('/veirfy-forget-password')}}" >
				<input class="forget-form-input" type="text" name="email" placeholder="enter email address">
				<br>
		   		 <button class="forget-form-button">Continue</button>
			</form>
			
		</div>
	</section>
</body>
</html>