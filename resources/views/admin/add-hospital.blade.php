
@extends('layouts.admin') 
	<title>add hospital</title>
	
<link href="{{ asset('style/adminstyle.css') }}" rel="stylesheet">
</head>
<body>
	<div class="hos-div-1">
		<div class="hos-div-2">
			
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56314.88410013136!2d30.78574086316246!3d28.095294472312904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145b2501ca8ed45f%3A0x1682970743a18080!2z2KfZhNmF2YbZitin2Iwg2YLYs9mFINin2YTZhdmG2YrYp9iMINmF2LHZg9iyINin2YTZhdmG2YrYp9iMINin2YTZhdmG2YrYpw!5e0!3m2!1sar!2seg!4v1615992390080!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
		<div class="hos-div-3">
			<div>add hospital: </div>
		<form action="#" class="hos-form form ">
			<table>
			<tr><td>
			<span> hospital name: </span></td><td><input type="text" name="hospitalName"><br>
			</td></tr>
			<tr>
			<td><span>Address: </span></td><td><input type="text" name="Address">
			</td></tr>
		</table>
		<button type="submit" name="save"> save </button>
	    </form>
	    </div>
	</div>
</body>
</html>
