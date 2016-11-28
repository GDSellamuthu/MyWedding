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

	  
 <!--to change backgroundcolor for input-->
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
						

<form method="post" action="handle_registerpage.php">

<table>
	<tr><td>USERNAME:</td>
		<td><input type="text" name="username" class="textInput" onfocus="myFunction(this)"></td><td></td>
	</tr>
	<tr><td>EMAIL:</td>
		<td><input type="email" name="email" class="textInput" onfocus="myFunction(this)"></td><td></td>
	</tr>
	<tr><td>PASSWORD:</td>
		<td><input type="password" name="password" class="textInput" onfocus="myFunction(this)"></td><td></td>
	</tr>
	<tr><td>CONFIRM PASSWORD:</td>
		<td><input type="password" name="confirmpassword" class="textInput" onfocus="myFunction(this)"></td><td></td>
	</tr>
	<tr><td></td><td></td>
		<td><input class="btn btn-info" type="submit" name="register-btn" value="Register"></td>
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