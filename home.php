<html>
<head>

	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

     </head>


<body>
	<div class=" w3l-login-form">
<form action="home.php" method="get">
	<div class=" w3l-form-group">
                <label>Enter Currency:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="input" placeholder="Enter amount" required="required" />
                </div>
     </div>

     <div class=" w3l-form-group">
                <label>Convert to:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <select name="dropdown">
						<option value="usd"> Us dollar</option>
						<option value="inr"> Indian rs</option>
					</select>
                </div>
     </div>
	
	
	 <button type="submit" name="sbmt">convert</button>
	
</form>
</div>
</body>

</html>	

`


<?php

	if(isset($_GET['sbmt']))
	{
		$cc_input=$_GET['input'];
		$cc_dropdown=$_GET['dropdown'];
		if($cc_dropdown=='usd')
		{
			$output=$cc_input*0.0130675 ;
			echo $output."Dollar";
		}
		if($cc_dropdown=='inr')
		{
			$output=$cc_input*76.5256 ;
			echo $output."Rs";
		}

	}
?> 	