
	<title>view</title>
@extends('layouts.head')
 <link href="{{ asset('style/style.css') }}" rel="stylesheet">

</head>
<body>
	<section class="main-section">
<section class="section1 container">
	<h2>doctors</h2>
	 @foreach($doctors as $doctor)
	<a href="{{route('showDoctor', $doctor->id)}}" class="section1-a">
		<img src="{{$doctor->user->image}}" alt="Doctor" width="150" height="150">
		<h4 class="section1-div-h4">{{$doctor->user->name}}</h4>
        <h6 class="section1-div-h6"><b>salary : {{$doctor->salary}}</b></h6>
	</a>
	 @endforeach
    {{$doctors->links()}}
</section>

<section class="section1 container">
	<h2>nurses</h2>
    @foreach($nurses as $nurse)
	<a href="{{route('showNerse' , $nurse->id)}}" class="section1-a">
		<img src="{{$nurse->user->image}}" alt="Nurse" width="150" height="150">
		<h4 class="section1-div-h4">{{$nurse->user->name}}</h4>
		<h6 class="section1-div-h6"><b>salary : {{$nurse->salary}}</b></h6>
	</a>
    @endforeach
    {{$nurses->links()}}
</section>

<section class="section1 container">
	<h2>people can speak about covid-19</h2>
    @foreach($helpUsers as $user)
	<div class="section1-a">
		<img src="{{$user->image}}" alt="doctor" width="150" height="150">
		<h4 class="section1-div-h4">{{$user->name}}</h4>
		<p class="section1-div-p">i had covid-19  but now I am well I can help you  </p>
	</div>
    @endforeach
    {{$helpUsers->links()}}
</section>
</section>
</body>
</html>
