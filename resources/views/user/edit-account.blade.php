<!DOCTYPE html>
<html>
<head>
	<title>edit account</title>
	  	 <link href="{{ asset('style/style.css') }}" rel="stylesheet">

</head>
<body>
	<section class="edit-section">

		<div class="edit-form">
			<img src="imges/user1.jpg">
			<h1 class="edit-form-h1">update </h1>
		    <h5 class="edit-form-h4">Please edit the fileds you </h5>
		    <h5 class="edit-form-h4">want to update</h5>
		    <form action="{{url('/profile')}}" >
			      <input class="signin-div-input" type="name" name="name" placeholder="mariam"><br>
			      <input class="signin-div-input" type="email" name="email" placeholder=" mariamhany@gmail.com"><br>
			      <input class="signin-div-input" type="text" name="phone" placeholder="0120234567"><br>

		   		 <button class="edit-form-button" type="submit">save</button>
			</form>

		</div>
		<div class="edit-img">
			<img src="imges\update.png" style="width: 71.5%;">
		</div>
	</section>
</body>
</html>
