@extends('layouts.head')
	<title>doctor</title>
	    <link href="{{ asset('style/style.css') }}" rel="stylesheet">

</head>
<body>

<div>
	<div class="map-doc-div">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2575.223199618993!2d30.841251169081428!3d27.734846355034538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9104f36b4861a4d9!2z2LnZitin2K_ZhyDYr9mD2KrZiNixINi52LXYp9mFINmF2K3ZhdivINmG2KfYrNmK!5e0!3m2!1sar!2seg!4v1618961630226!5m2!1sar!2seg" width="700" height="630" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
<div class="doc-content-div">

	            <img src="{{$doctor->user->image}}" >
	            <div class="doc-content">
                <h1>Hi {{$doctor->user->name}}</h1>
                <h5 > {{$doctor->qualifications}} </h5>
                </div >
                <div class="avalible-div">
                	<h2>avalible today</h2>
                	<h5>from : {{$doctor->from}} </h5>
                    <h5> to : {{$doctor->to}}</h5>
                </div>
                <div class="fees-div">
                	<h2>in clinic fees</h2>
                	<h5>{{$doctor->salary}}</h5>
                </div>
                <div class="services-div">
                	<h2>services</h2>
                	<ul>
                		<li>{{$doctor->services}}</li>

                	</ul>
                </div>

</div>
</div>
</body>
</html>
