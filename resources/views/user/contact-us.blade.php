@extends('layouts.head')  
	<title> contact us</title>
	
        <link href="{{ asset('style/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="contact-form-div">
         <h1>Contact Us</h1>
         <h3>feel free to contact us any time. we will get
         </h3><h3> back to you as soon as we can !</h3>
         <form action="#" method="post">
				<input type="text" name="mess-type" placeholder="Your message type"><br>
        <textarea rows="4" cols="25" >enter your message...</textarea>
        <button type="submit">send</button>
        </form>
</div>
<div class="contact-info-div">
  <h1>info</h1>
  <ul>
    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> mariamhany@gmail.com</li>
    <li><i class="fa fa-phone" aria-hidden="true"></i> +20 120 3456 789</li>
  </ul>

</div>
</body>
</html>