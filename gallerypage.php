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
    <title>Gallery</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/gallerystyle.css" rel="stylesheet">
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
				    <div class="thumbnail">
	 
	  <div class="gallery" align="center">
             <h3>Wedding Experts Photo Gallery</h3>
			 
							 
				<div class="thumbnails">
					<img onmouseover="preview.src=img1.src" name="img1" src="wedred.jpg" alt="red dress" />
					<img onmouseover="preview.src=img2.src" name="img2" src="dresstrad.jpg" alt="tradisional dress" />
					<img onmouseover="preview.src=img3.src" name="img3" src="dressb&w.jpg" alt="blackandwhitedress" />
					<img onmouseover="preview.src=img4.src" name="img4" src="cakefondant.jpg" alt="cakefondant" />
					<img onmouseover="preview.src=img5.src" name="img5" src="cakecream.jpg" alt="cakecream" />
					<img onmouseover="preview.src=img6.src" name="img6" src="cakeice.jpg" alt="cakeice" />
					<img onmouseover="preview.src=img7.src" name="img7" src="vintagedeco.jpg" alt="vintagedeco" />
					<img onmouseover="preview.src=img8.src" name="img8" src="tradisionaldeco.jpg" alt="tradisionaldeco" />
					<img onmouseover="preview.src=img9.src" name="img9" src="classicdeco.jpg" alt="classicdeco" />
				</div>

				<div class="preview" align="center">
				<img name="preview" src="wedred.jpg" alt="red dress"/>
				</div>

				</div> <!-- Close the gallery div -->
				
				</div>
				</div>
				</div>
				
				

	    <!--logout-->
			
	
			  
				
				
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