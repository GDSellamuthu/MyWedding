<?php
session_start();

include 'sqlconnect.php';

  $name=$_POST['name'];
  $email=$_POST['email'];
  $comment=$_POST['comment'];
  
 
$sql="INSERT INTO askexpert (name, email, comment) 
VALUES ('$name', '$email', '$comment')";
$result = $conn->query($sql);

print '<script type="text/javascript">';
print 'alert("Your data succesfully send!")';
print '</script>';

header ("Location:askexpert.php");

?>