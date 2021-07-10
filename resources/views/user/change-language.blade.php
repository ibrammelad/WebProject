@extends('layouts.head')  
	<title>change language</title>
	
    <link href="{{ asset('style/style.css') }}" rel="stylesheet">
   
</head>
<body>
<div class="change-lang-div">
					<h1>Change language</h1>
                    <h2>Language</h2>
                    <h4> Choose Your Preferred Language </h4>
                    <h4> Please select your language </h4>

                   <div class="change-radio-div">
                    <input type="radio" name="lang" id="arabic" value="arabic">
                    <label for="arabic"><img src="imges/egypt.png"></label>
                    
                    <input type="radio" name="lang" id="eng" value="eng">
                    <label for="eng"><img src="imges/english.jpg"></label>
              </div>
</div>
</body>
</html>