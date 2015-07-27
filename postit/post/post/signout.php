<?php
session_start(); 

if (isset($_COOKIE["username"])){
setcookie("username", "", time()-3600*24*1500);
setcookie("pass", "", time()-3600*24*1500);

}
if(isset($_SESSION['username'])){
  unset($_SESSION['username']);
    unset($_SESSION['pass']);

  }
header("location: index.php");
  ?>