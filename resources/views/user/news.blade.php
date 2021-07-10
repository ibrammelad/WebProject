	<!DOCTYPE html>
<html>
<head>	
	
	<title>news</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		 
		 <link href="{{ asset('style/style2.css') }}" rel="stylesheet">
		

</head>
<body>

<div class="bg-style">
 
  <div class="wrapper">
    <div class="row pt-5 pb-5">
    	<table>
    		<tr>
    			<td colspan="2">
    				<div class="col-6 col-sm-3">
			        <div class="counter" data-cp-percentage="100" data-cp-color="#00bfeb">
			        </div>
			        <h4>total number of injured</h4>
			        <p>118847</p>
			      </div>
    			</td>
    			
    		</tr>
    		<tr>
    			<td>
    				   <div class="col-6 col-sm-3">
				        <div class="counter" data-cp-percentage="1.4" data-cp-color="#00bfeb">
				        </div>
				        <h4>new cases</h4>
				        <p>405</p>
				        </div>

    			</td>
    			<td>
    				
				     <div class="col-6 col-sm-3">
			        <div class="counter" data-cp-percentage="87.26" data-cp-color="#EA4C89"></div>
			        <h4>number of recoveries</h4>
			        <p>103703</p>
			        </div>
    			</td>
    		</tr>
    		
    		<tr>
    			<td>
    				   <div class="col-6 col-sm-3">
				        <div class="counter" data-cp-percentage="1.9" data-cp-color="#FF675B"></div>
				        
				        <h4>new deaths</h4>
				        <p>19</p>
				      </div>

    			</td>
    			<td>
    				  <div class="col-6 col-sm-3">
				        <div class="counter" data-cp-percentage="5.71" data-cp-color="#FF9900"></div>
				        <h4>total number of deaths</h4>
				        <p>6790</p>
				      </div>
    			</td>
    		</tr>
    	</table>


      
     

   
    
    </div>
  </div>
  <button class="btn-update" ></button>
</div>

<div class="news-div">
		<h1>news</h1>
		<table class="news-div-table">
			<tr>
				<td>
					<a href="{{url('/chat')}}">
					<img src="imges/corona.jpg" width="250" height="150" >
					<div class="h2-p">
					<h2>elwatan news</h2>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
					</div>
					</a>
				</td>

				<td>
					<a href="{{url('/show-news')}}">
					<img src="imges/corona.jpg" width="250" height="150" >
					<h2>elwatan news</h2>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="{{url('/show-news')}}">
					<img src="imges/corona.jpg" width="250" height="150" >
					<h2>elwatan news</h2>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
					</a>
				</td>

				<td>
					<a href="{{url('/show-news')}}">
					<img src="imges/corona.jpg" width="250" height="150" >
					<h2>elwatan news</h2>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
					</a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="{{url('/show-news')}}">
					<img src="imges/corona.jpg" width="250" height="150" >
					<h2>elwatan news</h2>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
					</a>
				</td>

				<td>
					<a href="{{url('/show-news')}}">
					<img src="imges/corona.jpg" width="250" height="150" >
					<h2>elwatan news</h2>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
					</a>
				</td>
			</tr>
		</table>
	</div>

<script src="{{ asset('js/js.js') }}" defer></script>
</body>
</html>