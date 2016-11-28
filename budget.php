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
    <title>Budget & Planner</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/budgetstyle.css" rel="stylesheet">
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
				<div class="budgetstyle thumbnail">
	           <div class=" formimage container">
			   
						<h2>Budget & Planner</h2>
					    <h3>How many of us can afford something as grand, and is it even necessary?
						Weddings don't have to be expensive to be beautiful.<br />Choose your affordable wedding packages 
						Learn cost-cutting measures for inexpensive catering, dresses and decorations.</h3>
					<form action="handle_budget.php">
					<div class="row">
			        <div class="col-sm-6 col-md-10">
				    <div class="thumbnail">
					<fieldset><legend>Planner</legend>
						<div class="form-group">
							<p>What is your approximate budget for your wedding?:</p><br />
							<p> Username :
							<input type = "text" name="name"  id="name" size="20" />	</p>			  
				      
							        <p>Select budget</p>
									<select name="budget" multiple="multiple">
											<option value="RM 10000-RM 15000">RM 10000-RM 15000</option>
											<option value="RM 15000-RM 20000">RM 15000-RM 20000</option>
											<option value="RM 20000-RM 25000">RM 20000-RM 25000</option>
											<option value="RM 25000-RM 30000">RM 25000-RM 30000</option>
											<option value="RM 35000-RM 40000">RM 35000-RM 40000</option>
											<option value="RM 40000-RM 45000">RM 40000-RM 45000</option>
											<option value="RM 45000-RM 50000">RM 45000-RM 50000</option>
										  </select><br />
										  
				            <p>How many guest will attend?:<p>
							<select name="guest" multiple="multiple">
											<option value="100">100</option>
											<option value="200">200</option>
											<option value="300">300</option>
											<option value="400">400</option>
											<option value="500">500</option>
											<option value="600">600</option>
											<option value="700">700</option>
										  </select><br />
										  
							 <p>Check your wedding style:</p>	
                             
						     <select name="wedstyle" multiple="multiple">
											<option value="Tradisional">Tradisional</option>
											<option value="Vintage">Vintage</option>
											<option value="Classic">Classic</option>
											<option value="Modern">Modern</option>
										  </select><br />
								  
								
								
								 <p>Photography budget:</p>
							        <select name="photo" multiple="multiple">
											<option value="100">RM 100</option>
											<option value="200">RM 200</option>
											<option value="300">RM 300</option>
											<option value="400">RM 400</option>
										  </select><br />
										  
								<p>Food Preference:</p>	
								<select name="food" multiple="multiple">
											<option value="100">Buffet Style</option>
											<option value="200">Chinese Style</option>
											<option value="300">Dome Style</option>
										  </select>
                 
		                        <p>Additional Message:
							    <textarea name="message" id= "message" rows="5"  cols="30" ></textarea> 
									
						        </p>
										  
										  
								<div class="container">
								<button type="submit" value="Send" name="submit"  class="btn btn-primary">Send</button>
								</div>
								
				  </div>
				  </fieldset>
				  </div>
				  </div>
	            </div>
	  
	  </form>
	  </div>
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