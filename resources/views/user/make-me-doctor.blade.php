
	<title>make me doctor</title>
	@extends('layouts.head')
<link href="{{ asset('style/style.css') }}" rel="stylesheet">


</head>
<body>

<form action="{{route('store.doctor')}}" method="POST" class="form1-control" enctype="multipart/form-data">
	{{ csrf_field() }}
		<h5 class="form1-control-h5">Available Time: </h5>
		<div class="form1-control-file">
		<i class="fa fa-user-md" style="font-size: 150px;"></i><br>
		<span class="form1-control-span">medical identife</span>
			<input type="file" name="img" id="medical identife"  >
		@error('img')
		<small class="form-text text-danger ">{{$message}}</small>
		@enderror
		<hr>
		</div>
	<table class="form1-control-table">
		<tr>
	<td><span class="form1-control-span">From: </span></td>
	<td><input  class="form1-control-input" type="text" name="from" placeholder="hh:mm yyyy-MM-dd">
		@error('start')
		<small class="form-text text-danger ml-5 pl-5">{{$message}}</small>
		@enderror
	</td>
		</tr>
	<tr>
		<td><span class="form1-control-span">To: </span></td>
		<td><input  class="form1-control-input" type="text" name="to" placeholder="hh:mm yyyy-MM-dd">
		@error('end')
		<small class="form-text text-danger ml-5 pl-5">{{$message}}</small>
		@enderror
		</td>
	</tr>
	<tr>
		<td><span class="form1-control-span">lang: </span></td>
		<td><input  class="form1-control-input" type="text" name="lang" placeholder="type your longitude of address..">
		@error('lang')
		<small class="form-text text-danger ml-5 pl-5">{{$message}}</small>
		@enderror
	</td>
	</tr>
	<tr>
		<td><span class="form1-control-span">lat: </span></td>
		<td><input  class="form1-control-input" type="text" name="lat" placeholder="type your latitude of address..">
		@error('lat')
		<small class="form-text text-danger ml-5 pl-5">{{$message}}</small>
		@enderror
	</td>
	</tr>
	<tr>
		<td><span class="form1-control-span">fees: </span></td>
		<td><input  class="form1-control-input" type="text" name="salary" placeholder="type your fees...">
		@error('fees')
		<small class="form-text text-danger ml-5 pl-5" >{{$message}}</small>
		@enderror
		 </td>
	</tr>
	<tr>
		<td><span class="form1-control-span">qualifications: </span></td>
		<td><input  class="form1-control-input" type="text" name="qualifications" placeholder="type your qualifications...">
		@error('qualifications')
		<small class="form-text text-danger ml-5 pl-5">{{$message}}</small>
		@enderror
	</td>
	</tr>
	<tr>
		<td><span class="form1-control-span">services: </span></td>
		<td><input  class="form1-control-input" type="text" name="services" placeholder="type services you are provide...">
		@error('services')
		<small class="form-text text-danger ml-5 pl-5">{{$message}}</small>
		@enderror
	</td>
	</tr>

</table>
<button type="submit" name="submit" class="form1-control-button">send to review</button>
</form>

</body>
</html>
