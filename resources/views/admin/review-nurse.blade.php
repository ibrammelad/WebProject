@extends('layouts.admin') 
	<title>review doctors</title>
	
<body>
<div class="container">
	<h1 class="container-h1">nurses review page </h1>
	<table class="table" style="margin-top: 50px;">
		<tr class="table-tr">
			<!-------------------------------------tr 1------------------------------>
			<td>
			<img src="imges/doctor.jpg" alt="doctor" width="150" height="150">
			</td>
			<td>
			<h3>nurse name </h3>
			<h5>Available Time: </h5> 
			<span style="color: #1cbbd0;">From : </span> <span>hh:mm yyyy-MM-dd</span><br>
			<span style="color: #1cbbd0;">To : </span> <span>hh:mm yyyy-MM-dd</span><br>
			
		    </td>
		    <td class="td">
			<span style="color: #1cbbd0;">fees : </span><span> nurse fees</span><br>
			<span style="color: #1cbbd0;">qualifications : </span><span> nurse qualifications</span><br>
			<span style="color: #1cbbd0;">servses : </span><span> nurse servises</span><br> 
			</td>

			<td class="td-radio">
			<div class="div-radio ">
			<input type="radio" id="accept" name="div-radio" value="accept">
			<label for="accept">accept</label>
			<input type="radio" id="Refusal" name="div-radio" value="Refusal">
			<label for="Refusal">Refusal</label>
			</div>
		    </td>
		</tr>
		<!-------------------------------------tr 2------------------------------>
		<tr class="table-tr">
			<td>
			<img src="imges/doctor.jpg" alt="doctor" width="150" height="150">
			</td>
			<td>
			<h3>doctor name </h3>
			<h5>Available Time: </h5> 
			<span style="color: #1cbbd0;">From : </span> <span>hh:mm yyyy-MM-dd</span><br>
			<span style="color: #1cbbd0;">To : </span> <span>hh:mm yyyy-MM-dd</span><br>
			
		    </td>
		    <td class="td">
			
			<span style="color: #1cbbd0;">fees : </span><span> nurse fees</span><br>
			<span style="color: #1cbbd0;">qualifications : </span><span> nurse qualifications</span><br>
			<span style="color: #1cbbd0;">servses : </span><span> nurse servises</span><br> 
			</td>

			<td class="td-radio">
			<div class="div-radio ">
			<input type="radio" id="accept" name="div-radio" value="accept">
			<label for="accept">accept</label>
			<input type="radio" id="Refusal" name="div-radio" value="Refusal">
			<label for="Refusal">Refusal</label>
			</div>
		    </td>
		</tr>
		<!-------------------------------------tr 3------------------------------>
		<tr class="table-tr">
			<td>
			<img src="imges/doctor.jpg" alt="doctor" width="150" height="150">
			</td>
			<td>
			<h3>doctor name </h3>
			<h5>Available Time: </h5> 
			<span style="color: #1cbbd0;">From : </span> <span>hh:mm yyyy-MM-dd</span><br>
			<span style="color: #1cbbd0;">To : </span> <span>hh:mm yyyy-MM-dd</span><br>
		    </td>
		    <td class="td">
			<span style="color: #1cbbd0;">fees : </span><span> nurse fees</span><br>
			<span style="color: #1cbbd0;">qualifications : </span><span> nurse qualifications</span><br>
			<span style="color: #1cbbd0;">servses : </span><span> nurse servises</span><br> 
			</td>

			<td class="td-radio">
			<div class="div-radio ">
			<input type="radio" id="accept" name="div-radio" value="accept">
			<label for="accept">accept</label>
			<input type="radio" id="Refusal" name="div-radio" value="Refusal">
			<label for="Refusal">Refusal</label>
			</div>
		    </td>
		</tr>
	</table>
	</div>
</body>
</html>