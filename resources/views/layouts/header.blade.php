<header class="header">
	<nav class="header-nav">
		<ul class="header-nav-ul">

			<a href="{{url('/dashboard')}}"><li title="home"><i class="fa fa-home" aria-hidden="true"></i> HOME</li></a>
			<a href="{{url('/news')}}"><li title="news"><i class="fa fa-newspaper-o" aria-hidden="true"></i> NEWS</li></a>
			<a href="{{url('/view-helpers')}}"><li title="doctors & nurses"><i class="fa fa-user-md" aria-hidden="true"></i> VIEW DOC &NURSE</li></a>

			<li title="setting">
					<div class="dropdown">
					<button type="button" class="btn text-dark dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs" aria-hidden="true"></i></button>
					<div class="dropdown-menu">
				<img src="imges/user.png" width="50" height="50" style="margin-left: 10px; display: inline-block;position: absolute;">
				<a class="dropdown-item" href="{{url('/profile')}}" style="margin-left: 70px; font-size: 30px; width: 35%; border-radius: 20px; display: inline-block;position: relative;">{{ ucfirst(Auth()->user()->name) }}</a>
				<hr>
				<a class="dropdown-item" href="{{url('/hospital')}}" title="nearly places to reach it quickly">
				    <i class="fa fa-hospital-o" aria-hidden="true"></i> <span>Nearly hospitals</span>
					<div class="fa fa-angle-right" aria-hidden="true"></div>
				</a>
				<a class="dropdown-item" href="{{url('/people')}}" title="nearly people have covid with Privacy">
				 <i class="fa fa-users" aria-hidden="true"></i> <span>Nearly people</span>
				 <div class="fa fa-angle-right" aria-hidden="true"></div>
				</a>
				<a class="dropdown-item" href="#" title="how your personal information is used">
					<i class="fa fa-bookmark" aria-hidden="true"></i> <span>Saved</span>
					<div class="fa fa-angle-right" aria-hidden="true"></div>
				</a>
				<a class="dropdown-item" href="{{url('/privacy')}}" title="how your personal information is used">
					<i class="fa fa-lock" aria-hidden="true"></i> <span>Privacy</span>
					<div class="fa fa-angle-right" aria-hidden="true"></div>
				</a>
				<a class="dropdown-item" href="{{url('/change-language')}}" title="if you want change app Language">
					<i class="fa fa-globe" aria-hidden="true"></i> <span>Languages</span>
					<div class="fa fa-angle-right" aria-hidden="true"></div>
					</a>
				<a class="dropdown-item" href="{{url('/contact-us')}}" title="have a question about your phone or plan? ">
				 <i class="fa fa-phone" aria-hidden="true"></i> <span>Contact us</span>
				 <div class="fa fa-angle-right" aria-hidden="true"></div>
				</a>
				<a class="dropdown-item" href="{{url('/about-us')}}" title="who you are? or what matters to you?">
				 	 <i class="fa fa-info" aria-hidden="true"></i> <span>About us</span>
					 <div class="fa fa-angle-right" aria-hidden="true"></div>
				</a>
				<a class="dropdown-item" href="{{url('logout')}}">
					<i class="fa fa-sign-out" aria-hidden="true" style="background-color: red;"></i> <span>Logout</span>
					<div class="fa fa-angle-right" aria-hidden="true"></div>
				</a>

				</div>
			</div>
			</li>
		</ul>
	</nav>

</header>
