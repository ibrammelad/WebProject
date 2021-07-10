@extends('layouts.head')
	<title>nurse</title>

     <link href="{{ asset('style/style.css') }}" rel="stylesheet">
</head>
<body>


<div class="doc-content-div" style="margin-left: 480px;">
	            <img src="{{$nurse->user->image}}" >
	            <div class="doc-content">
                <h1>Hi {{$nurse->user->name}} !</h1>
                <h5 > {{$nurse->qualifications}}</h5>
                </div >
                <div class="avalible-div">
                	<h2>avalible today</h2>
                	<h5>From : {{$nurse->from}}</h5>
                	<h6>To : {{$nurse->to}}</h6>
                </div>
                <div class="fees-div">
                	<h2>fees</h2>
                	<h5>{{$nurse->salary}} L.E</h5>
                </div>
                <div class="services-div">
                	<h2>services</h2>
                	<ul>
                		<li>{{$nurse->services}}</li>
                	</ul>
                </div>


</div>
</body>
</html>
