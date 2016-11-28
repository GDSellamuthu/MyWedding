<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Registration</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/handle_loginpagestyle.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>
  
  <body>
    <div id="wrapper">
	  <img src="handleregbg.jpg" id="bg" alt="">


    <div class="row">
			  <div class="col-sm-6 col-md-12">
				<div class="accountarea thumbnail">



<?php 
 if ($_POST["username"] == 'username' && $_POST["password"] == 'password') {
include 'sqlconnect.php'; 
// If correct, we set the session to YES
  session_start();
  $_SESSION["login_btn"] = "YES";
  echo "You are now logged in.</br></br>";
  echo "<a href='home.php'>Proceed to contacts...</a>";

}
else {

// If not correct, we set the session to NO
  session_start();
  $_SESSION["login_btn"] = "NO";
  echo "Incorrect username and / or password.</br></br>";
  echo "<a href='loginpage.php'>Return to login</a>";

}

		
?>
</div>
<p class="redirect"><a href="home.php" target="home.php">Proceed to Home Page</a></p>
</div>

</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</div>
</body>
</html>