<?php
include ("connection.php");
$con=mysqli_connect($host,$user,$password,$db);
if (mysqli_connect_errno())
  {
  err (1);
  }
  sql = "select * from posts where writer='$person'";

  $result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result))
  {
 $posts = $row['posts'];
  }  ?>