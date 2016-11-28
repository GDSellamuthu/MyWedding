<html>
<body>


<?php 

if($db=mysqli_connect("localhost", "root", "", "wedauthentication") ){
	print '<p>Connected.</p>';
	mysqli_close($db); //close the connection 
	
	
}
else {
	print '<p style="color:red ;">Connection failed</p>';
}
?> 

</body>
</html>