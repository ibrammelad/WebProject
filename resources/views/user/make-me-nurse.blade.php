@extends('layouts.head')
	<title>make me nurse</title>

<link href="{{ asset('style/style.css') }}" rel="stylesheet">


</head>
<body>

<form action="{{route('makeMeNurse')}}" method="post" class="form1-control">
    @csrf
		<div class="form1-control-file">
		<i class="fa fa-user-md" style="font-size: 150px;"></i><br>
		<hr>
		</div>
	<table class="form1-control-table">
		<tr>
            <td><span class="form1-control-span">From: </span></td>
            <td><input  class="form1-control-input" type="text" name="from" placeholder="hh:mm yyyy-MM-dd"></td>
            <div>
                @error('from')
                <span class="text-danger"> {{$message}}</span>
                @enderror
            </div>
		</tr>
	<tr>
		<td><span class="form1-control-span">To: </span></td>
		<td><input  class="form1-control-input" type="text" name="to" placeholder="hh:mm yyyy-MM-dd"></td>
        <div>
            @error('to')
            <span class="text-danger"> {{$message}}</span>
            @enderror
        </div>
	</tr>

	<tr>
		<td><span class="form1-control-span">fees: </span></td>
		<td><input  class="form1-control-input" type="text" name="salary" placeholder="type your fees..."></td>
        <div>
            @error('salary')
            <span class="text-danger"> {{$message}}</span>
            @enderror
        </div>
	</tr>
	<tr>
		<td><span class="form1-control-span">qualifications: </span></td>
		<td><input  class="form1-control-input" type="text" name="qualifications" placeholder="type your qualifications..."></td>
        <div>
            @error('qualifications')
            <span class="text-danger"> {{$message}}</span>
            @enderror
        </div>
    </tr>

	<tr>
		<td><span class="form1-control-span">services: </span></td>
		<td><input  class="form1-control-input" type="text" name="services" placeholder="type services you are provide..."></td>
        <div>
            @error('services')
            <span class="text-danger"> {{$message}}</span>
            @enderror
        </div>
    </tr>

</table>
<button type="submit"  class="form1-control-button">send to review</button>
</form>
</body>
</html>
