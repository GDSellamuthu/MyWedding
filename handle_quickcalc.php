<html>
<body>
<p>Total Amount RM:</p>
<?php 
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
									echo $result1 + $result2 + $result3 + $result4 + $result5 + $result6;
									break;
								}
								
							
								
							}
						
?>
</body>
</html>