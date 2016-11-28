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
session_start();
include 'sqlconnect.php';


$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

$sql="SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()) {
	echo "Your username or password is incorrect!Go back and try again.";
	
}else {
	$_SESSION['id']= $row['id'];
	header ("Location:home.php");
}



?>
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