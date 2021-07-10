<!DOCTYPE html>
<html>
<head>
	<title>veirfy password</title>
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
	<section class="verify-section">
        @include('layouts.alerts.success')
        @include('layouts.alerts.errors')
		<div class="veirfy-form">
				 <i class="fa fa-envelope-o"></i>
                    <h1 class="veirfy-form-h1">Verification Code</h1>
                    <h4 class="veirfy-form-h4">Please type the verification code </h4>
                    <h4 class="veirfy-form-h4">sent to your email address</h4>



				<form action="{{url('/veirfied_email')}}" method="post" >
                    @csrf
                    <input type="text" name="code" style="margin-left: 150px; margin-top: 20px;">
                    <button class="verify-form-button" type="submit"> >></button>
			</form>

		</div>
		<div class="verify-img">
			<img src="imges\veirfy-pic.jpg" style="width: 100%;">
		</div>
	</section>
</body>
</html>
