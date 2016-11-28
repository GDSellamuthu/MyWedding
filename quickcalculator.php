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
    <title>Quick Calculator</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/quickcalstyle.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
  </head>
  
  <body>
    <div id="wrapper">
	<nav class="navbarheader navbar navbar-inverse navbar-static-top" role="navigation">
	  <div class="container-fluid">
	  <div class="navbar-header">
	  
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-Booktique-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
		
      </button>
	   <img alt="Brand" src="logo.jpg" height="50px" width="100px"><a class="navbar-brand" href="#">Wedding Experts</a>
	 
	 </div>
	   <div class="collapse navbar-collapse navbar-right" id="bs-Booktique-navbar-collapse-1">
	    <ul class="nav navbar-nav  ">
		   <li><a href="http://localhost/wed/home.php">Home</a></li>
		   <li><a href="http://localhost/wed/aboutpage.php">About</a></li>
		   <li class="active dropdown">
				    <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
				        <ul class="dropstyle dropdown-menu">
					<li><a href="http://localhost/wed/budget.php">Budget & Planner</a></li>
					<li><a href="http://localhost/wed/askexpert.php">Ask Experts</a></li>
					<li><a href="http://localhost/wed/quickcalculator.php">Quick Calculator</a></li>
				        </ul>
				    </li>
		   <li><a href="http://localhost/wed/gallerypage.php">Gallery</a></li>
		   <li><a href="http://localhost/wed/contactpage.php">Contacts</a></li>
		</ul>
	  </div>
	  </div>
	  </nav>
	  
	  <img src="back2.jpg" id="bg" alt="">
	 
	  <div class="row">
			  <div class="col-sm-6 col-md-12">
				<div class="calstyle thumbnail">
	           <div class=" formimage container">
			   
						<h2>Quick Calculator!</h2>
					    <h3>Calculate your wedding expenses.</h3>
						
					<form>
					<div class="row">
			        <div class="col-sm-6 col-md-10">
				    <div class="calc thumbnail">
					<fieldset><legend>Calculate</legend>
					<p>Please enter your estimated amount in RM </p>
					<table>
					<tr><td>Catering:</td><td><input type="text" name="num1" placeholder=""></td></tr>
					<tr><td>Weddingdress:</td><td><input type="text" name="num2" placeholder=""></td></tr>
					<tr><td>Decoration :</td><td><input type="text" name="num3" placeholder=""></td></tr>
					<tr><td>Photography:</td><td><input type="text" name="num4" placeholder=""></td></tr>
					<tr><td>Invitation:</td><td><input type="text" name="num5" placeholder=""></td></tr>
					<tr><td>Doorgift:</td><td><input type="text" name="num6" placeholder=""></td></tr>
						
					    <tr><td></td><td><select name="operator">
							<option>None</option>
							<option>Add</option>
						</select></td></tr>
						<tr><td>
						Click calculate button to add total amount.</td></tr>
						<tr><td></td>
						<td><button type="submit" name="submit" value="submit">Calculate</button></td></tr>
						</table>
						
						 <p>Total Amount Estimated:</p>

	  <?php 
	  error_reporting(0);
							if (isset($_GET['submit'])){
								$result1=$_GET['num1'];
								$result2=$_GET['num2'];
								$result3=$_GET['num3'];
								$result4=$_GET['num4'];
								$result5=$_GET['num5'];
								$result6=$_GET['num6'];
								$operator =$_GET['operator'];
								switch ($operator){
									case None:
									echo "Please select Add!";
									break;
									case Add:
									echo "RM";
									echo $result1 + $result2 + $result3 + $result4 + $result5 + $result6;
									break;
								}
								
							
								
							}
						
?>		
				  </div>
				  </fieldset>
				  </div>
				  </div>
	              </div>
				 
	  
	  </form>
	 
	  </div>
	  </div>
	  </div>
	  
	 
	  
	   
	 
	 
	      <!--footer-->
<nav class="navbarfooter navbar navbar-inverse navbar-static-bottom">
<div class="container">
   COPYRIGHT &copy; 2016 WEDDINGEXPERTS All RIGHTS RESERVED
  </div>
</nav>    
			
					
						
		 
                        
			
	 
	  
	  
	  
	  
	  
	  
	  
	  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</div>
  </body>
</html>