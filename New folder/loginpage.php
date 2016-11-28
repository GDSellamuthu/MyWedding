<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Wedding Experts</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/loginpagestyle.css" rel="stylesheet">
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
				    <h1>A truly magnificent setting for your special event.</h1>
					<h2>Welcome</h2>
					<p><h3>Login to Your Account</h3></p>
					
					<form action="handle_loginpage.php" method="POST">
					
					<table>
					<td>Username</label></td><td><input type="text" id="username" name="username" maxlength="50" onfocus="myFunction(this)"></td><td></td><td></td>
					</tr>
					<tr>
					<td>Password</label></td><td><input type="password" id="password" name="password" onfocus="myFunction(this)"></td><td></td><td></td>
					</tr><br />
					<tr>
					<td></td><td></td>
					<td><p><input class="btn btn-info" name="login_btn" title="Log In" type="submit" value="Log In"></p></td>	
					</tr>
					<tr>
					<td></td>
                    <td><p><a href="registerpage.php" target="registerpage.php">Create Account</a></p> </td>
					<td></td>
                    </tr>					
					</table>
					</form>
				</div>
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