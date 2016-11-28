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
    <title>Wedding Experts</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/homestyle.css" rel="stylesheet">
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
		   <li class="active"><a href="http://localhost/wed/home.php">Home</a></li>
		   <li><a href="http://localhost/wed/aboutpage.php">About</a></li>
		   <li class="dropdown">
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
				<div class="accountarea thumbnail">
				    <h1>A truly magnificent setting for your special event.</h1>
					<h2>Welcome to The Wedding Experts</h2>
					<p class="intro">Wedding Experts is a well known website to plan your dream wedding.<br />You should be aware that 
					how well you plan, one or more issues can affect your wedding.But if you simply set aside<br /> the recommended
					time amount in your schedule and we can help you overcome these issues.You can send us your<br /> wedding details
					and the things needed on your special day.When all is set and done, final scehulde decisions are up to<br /> you
					and we will work on whatever framework your provide with the best outcome.</p>
					
					
				
				
				</div>
				</div>
				</div>
	            
				
				
	
		<div class="row">
			  <div class="col-sm-6 col-md-12">
		<div class="slidestyle container">
		  <br>
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			  <li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">

			  <div class="item active">
				<img src="outdoor1.jpg" alt="outdoor" width="500" height="200">
				<div class="carousel-caption">
				  <h3>OutDoor Reception</h3>
				  <p>Mind Blowing outdoor reception decoration.</p>
				</div>
			  </div>

			  <div class="item">
				<img src="cake1.jpg" alt="cake" width="500" height="345">
				<div class="carousel-caption">
				  <h3>Wedding Cake</h3>
				  <p>Delicious wedding cake, based on your wedding theme.</p>
				</div>
			  </div>
			
			  <div class="item">
				<img src="food1.jpg" alt="food" width="500" height="345">
				<div class="carousel-caption">
				  <h3>Food</h3>
				  <p>Variety of meals set for your dream wedding.</p>
				</div>
			  </div>

			  <div class="item">
				<img src="outfit1.jpg" alt="outfit" width="500" height="345">
				<div class="carousel-caption">
				  <h3>Wedding Dress</h3>
				  <p>Designer's, wedding gown and coat.</p>
				</div>
			  </div>
		  
			</div>

			<!-- Left and right -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
		</div>	
	    </div>
		</div>
	
			
				<div class="row">
			  <div class="col-sm-6 col-md-4">
				<div class="whatsnewstyle thumbnail">
				  
				  <div class="caption">
					<h3>Ask Experts!</h3>
					<img src="experts.jpg" alt="expertsimage" height="200px" width="280px">
					<p class="ask">Send text messages about your dream wedding and get feedback from our experts.</p>
					<p><a href="http://localhost/wed/askexpert.php" class="btn btn-primary" role="button">Send Message</a> </p>
				  </div>
				</div>
			  </div>
			  <div class="col-sm-6 col-md-8">
			  <div class="favorstyle thumbnail">
			  
			  
			 
			  <h3>Fresh tips for wedding favors</h3>
			  <table><tr><td>
			  <img src="Diysweets.jpg" alt="candy" width="250px" height="150px"> &nbsp;
			  </td><td>
			  <div><input type="checkbox" class="read-more-state" id="post-1" />
				<p class="read-more-wrap">DIY interesting favors for your beloved guest who attending your big day 
				<span class="read-more-target">Our Candy Buffet, featuring old fashioned candy and of course, 
				Big League Chew (you can’t have a Baseball themed wedding without it!)Eventually will add more shine on the day.
				</span></p>
  
				<label for="post-1" class="read-more-trigger"></label>
                </div>	
				 </td></tr>
				 <tr><td>
				 <img src="soda.jpg" alt="sodabottle" width="250px" height="150px"> &nbsp;
			     </td><td>
				 <div><input type="checkbox" class="read-more-state" id="post-2" />
				<p class="read-more-wrap">If you are a flower lover, you can add more flowers to your 
				wedding and also as a door gift
				<span class="read-more-target">Our Flowers in vintage soda bottles will excite you and 
				also your guest, recycling old
				glass bottle by placing a flower into the bottle with some messages.
				</span></p>
  
				<label for="post-2" class="read-more-trigger"></label>
                </div>	
				</td></tr>
				
				</table> 
				</div>
				</div>
</div>			
            <!--logout-->
			<div class="row">
			  <div class="col-sm-6 col-md-12">
				<div class="logout thumbnail">
				<h6>Thank You! Please like our facebook page <br /></h6>
				<div class= "changeim image">
				<a href="https://www.facebook.com/weddingexpertsassignment/?ref=aymt_homepage_panel">
				<img src="fblike.png" alt="fbicon" width="320px" height="70px">
				</a></div>
				<div class="logoutbutton">
				<form action="handle_logout.php">
					<button>Log Out</button>
					
				</form>
				</div>
				</div>
				</div>
				</div>
	
			  
				
				
<!--footer-->
<div class="footer">
<nav class="navbarfooter navbar navbar-inverse navbar-static-bottom">
<div class="container">
   COPYRIGHT &copy; 2016 WEDDINGEXPERTS All RIGHTS RESERVED
  </div>
</nav>
</div>
              

			
			
					
						
		 
                        
			
	 
	  
	  
	  
	  
	  
	  
	  
	  
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</div>
  </body>
</html>