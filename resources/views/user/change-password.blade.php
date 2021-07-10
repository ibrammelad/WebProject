@extends('layouts.head')	
	<title>change password</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('style/style.css') }}" rel="stylesheet">
   
</head>
<body>
	<section class="reset-section">
		<div class="reset-img">
			<img src="imges\veirfy-pic.jpg" style="width: 100%;">
		</div>
		<div class="change-pass-form">
				 
                    <h1 class="reset-form-h1">update</h1>
                    <h4 class="reset-form-h4">Please edit the fileds you</h4>
                    <h4 class="reset-form-h4">want to update</h4>
             <form action="{{url('/profile')}}">
             	    <input type="password" name=" old password" placeholder="old password"><br>
             		<input type="password" name=" new password" placeholder="new password"><br>
             		<input type="password" name="comfirm password" placeholder="comfirm new password">
                    
				
		   		 <button class="verify-form-button" type="submit"> save </button>
			</form>
			
		</div>
		
	</section>
</body>
</html>