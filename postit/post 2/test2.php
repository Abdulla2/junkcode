<?php
$con=mysqli_connect("localhost","root","","post");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $s1 = "SELECT * FROM Persons
WHERE username='";
$s2 = "and password = '";
  $person = "abdulla";
   $pass = "123";
$s3 ="'";
$sql = "select * from persons where username='$person' and password='$pass'";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);
  
  echo $row['password'] . " " . $row['username'];
  echo "<br>";
  
?>