<?php
session_start();
if(isset($_SESSION['username']) and ($_SESSION['pass']))
$person = ($_SESSION['username']);
elseif (isset($_COOKIE["username"]) and ($_SESSION['pass']))
$person = ($_COOKIE["username"]);
else{
header("location: index.php");
}
if (isset ($_POST ["post"])){
$post = $_POST["post"];
}
else {
header("location: index.php");
}
include ("connection.php");
$con=mysqli_connect($host,$user,$pass,$db);
if (mysqli_connect_errno())
  {
  err (1);
  }
  $sql = "INSERT INTO posts
VALUES('',$post,$person)";
mysqli_query($con,$sql) or die ("111");

?>