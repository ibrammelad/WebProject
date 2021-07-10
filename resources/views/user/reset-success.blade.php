<!DOCTYPE html>
<html>
<head>
	<title>reset success</title>
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
	<section class="reset-section">
		<div class="reset-img">
			<img src="imges\veirfy-pic.jpg" style="width: 100%;">
		</div>
		<div class="reset-form">
				 <i class="fa fa-check-square-o"></i>
                    <h1 class="reset-form-h1">Reset Successful</h1>
                    <h4 class="reset-form-h4">You have successfully reset your</h4>
                    <h4 class="reset-form-h4">Password please use your new</h4>
                    <h4 class="reset-form-h4">Password when logging in</h4>
                    <form action="{{url('/signin')}}">
		   		 <button class="reset-form-button" type="submit"> sign in </button>
		
			</form>
		</div>
		
	</section>
</body>
</html>