@extends('layouts.header')
	<title>privacy</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="{{ asset('style/style.css') }}" rel="stylesheet">
</head>
<body>
	<div class="container">
        @include('layouts.alerts.success')
        @include('layouts.alerts.errors')
		<ul class="container-ul">
            @include('layouts.alerts.success')
            @include('layouts.alerts.errors')
			<li class="container-ul-li">
				<div>
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
				<h3>Email</h3><br>
				<span>show email to other users</span>
				</div>
				<label class="switch">
				<input data-id="{{Auth()->user()->id}}" class="toggle-class2" type="checkbox" data-onstyle="primary" data-offstyle="secondary" data-toggle="toggle" data-on="on" data-off="off" {{ Auth()->user()->showMail ? 'checked' : '' }}>
			</label>
			</li>
			<li class="container-ul-li">

				<div>
				<i class="fa fa-handshake-o" aria-hidden="true"></i>
				<h3>Help users about covid-19</h3><br>
				<span>appear in doctors screen and chat with users to help them</span>
				</div>
				<label class="switch">
                    <input data-id="{{Auth()->user()->id}}"  class="toggle-class3" type="checkbox" data-onstyle="primary" data-offstyle="secondary" data-toggle="toggle" data-on="on" data-off="off" {{ Auth()->user()->HelpUsers ? 'checked' : '' }}>
                </label>
			</li>
			<li class="container-ul-li">
				<div>
					<i class="fa fa-file" aria-hidden="true"></i>
				<h3>name showing</h3><br>
				<span>show my real name in case have covi-19</span>
				</div>
				<label class="switch">
				 <input data-id="{{Auth()->user()->id}}" class="toggle-class1" type="checkbox" data-onstyle="primary" data-offstyle="secondary" data-toggle="toggle" data-on="on" data-off="off" {{ Auth()->user()->showName ? 'checked' : '' }}>
				</label>
			</li>
			<li class="container-ul-li">

				<div>
					<i class="fa fa-comments-o" aria-hidden="true"></i>
				<h3>nearly cases notify</h3><br>
				<span>send notification to me if nearly people have covid-19 </span>
				</div>
				<label class="switch">
				<input data-id="{{Auth()->user()->id}}" class="toggle-class4" type="checkbox" data-onstyle="primary" data-offstyle="secondary" data-toggle="toggle" data-on="on" data-off="off" {{ Auth()->user()->showNearly ? 'checked' : '' }}>
			</label>
			</li>
			<li class="container-ul-li">

				<div>
					<i class="fa fa-user-md" aria-hidden="true"></i>
				<h3>make me doctor</h3><br>
				<span>to help people as doctor and change account type </span>
				</div>
				<label class="switch">

                    <a href="{{url('/make-doctor')}}">

                      <button>Doctor</button></a>
				</label>
			</li>
			<li class="container-ul-li">

				<div>
					<i class="fa fa-user-md" aria-hidden="true"></i>
				<h3>make me nurse</h3><br>
				<span>to help people as nurse to get treat </span>
				</div>
				<label class="switch">
				 <a href="{{url('/make-nurse')}}">
                     <button>nurse</button>
                 </a>
				</label>

			</li>
		</ul>
	</div>

</body>
<script src="{{ asset('js/privacy.js') }}" defer></script>
</html>
