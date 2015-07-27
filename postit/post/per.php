<?php
if (isset ($_GET["person"])){
$person = $_GET["person"];
}
else
{
header("location: index.php");
}
include ("connection.php");
$con=mysqli_connect($host,$user,$pass,$db);
if (mysqli_connect_errno())
  {
  err (1);
  }
    $sql = "select * from following where follower='$person'";
  $result = mysqli_query($con,$sql);
  echo "<html><head><title>$person</title> <link rel='stylesheet' type='text/css' href='all.css'><meta content='text/html; charset=utf-8' http-equiv='Content-Type' /> 

</head><body>
<header><a href='signout.php'>تسجيل الخروج</a><br></header> <br><br>";
while($row = mysqli_fetch_array($result))
  {
  $fo = $row['following'];
  
echo " 
<div id='per'>$fo <br></div></body>
";
  }
  ?>