<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Registration</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/registerpagestyle.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>
  
  <body>
    <div id="wrapper">
	  <img src="couple1.jpg" id="bg" alt=""> 

	  
 <!--change backgroundcolor in the input box-->
			<script>
			function myFunction(x) {
				x.style.background = "purple";
			}
			</script>	  



<div class="row">
				<div class="col-sm-6 col-md-12">
				<div class="accountarea thumbnail">
					<h4>Wedding Experts</h4>
					
					<h2>Member Registration</h2>
				    <h3>Create Personal Account</h3>


			

<form action="handle_registerpage.php" method="POST">

<table>
	<tr><td>Firstname:</td>
		<td><input type="text" name="first" placeholder="Firstname" class="textInput" onfocus="myFunction(this)"></td><td></td>
	</tr>
	<tr><td>Lastname:</td>
		<td><input type="text" name="last" placeholder="Lastname" class="textInput" onfocus="myFunction(this)"></td><td></td>
	</tr>
	<tr><td>Username:</td>
		<td><input type="text" name="uid" placeholder="Username" class="textInput" onfocus="myFunction(this)"></td><td></td>
	</tr>
	<tr><td>Password:</td>
		<td><input type="password" name="pwd" placeholder="Password" class="textInput" onfocus="myFunction(this)"></td><td></td>
	</tr>
	<tr><td></td><td></td>
		<td><button type="submit">SIGN UP</button></td>
	</tr>
</table>

</form>


</div>
</div>
</div>











  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</div>
  </body>

  </html>