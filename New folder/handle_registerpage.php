<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Registration</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/handle_registerpagestyle.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>
  
  <body>
    <div id="wrapper">
	 <!-- <img src="handleregbg.jpg" id="bg" alt="">-->


    <div class="row">
			  <div class="col-sm-6 col-md-12">
				<div class="accountarea thumbnail">
<?php 
include 'sqlconnect.php';


    
	
	//connect to database;
	$db=mysqli_connect("localhost", "root", "", "wedauthentication");
	
	if(isset($_POST['register-btn'])) {
		
		$username = $_POST["username"]; 
        $email = $_POST["email"]; 
		$password=$_POST["password"];
		$confirmpassword=$_POST["confirmpassword"];
		
		if( empty(($_POST['username'])&&($_POST['email'])&&($_POST['password'])&&($_POST['confirmpassword']))){
			print 'Incomplete details';
		
		        if(empty($_POST['username'])){
			        print 'Please go back and enter your Username.';
	            }
	            if(empty($_POST['email'])) {
					print 'Please enter your email address.';
					
				}
				if(empty($_POST['password'])) {
					print 'Please enter your password.';
					
				}
				if(empty($_POST['confirmpassword'])) {
					print 'Please confirm your password.';
					
				}
				
		}else{
			    if($password==$confirmpassword) {
					//create users
					$password =md5($password);
					$confirmpassword =md5($confirmpassword);//star for password for more security 
					
					mysqli_query($db,"INSERT INTO userswed(username,email,password) VALUES('$username', '$email', '$password')");
					print 'Successfully registerd as Wedding Experts member, Thank You!';
					
				}
				else {
					//failed
					
					print 'You password does not match!Please try again.';
				}
		}
	
	}
	
      

?>


</div>
<p class="redirect"><a href="loginpage.php" target="loginpage.php">Proceed to Login Page</a></p>
</div>

</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</div>
</body>
</html>