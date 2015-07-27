<?php 
session_start(); 
if(isset($_SESSION['username']) and ($_SESSION['pass']))
header("location: index.php");
elseif (isset($_COOKIE["username"]) and ($_COOKIE['pass']))
header("location: index.php");
else {
  include ("connection.php");
  echo "<html><head><title>الدخول</title><meta http-equiv='content-type' content='text/html; charset=utf-8'> <link rel='stylesheet' type='text/css' href='all.css'>
</head><body>
";
$con=mysqli_connect($host,$user,$pass,$db);
if ( isset ($_POST["name"]) and ($_POST["pass"])){

$person = $_POST["name"] ;
$pass = $_POST["pass"] ;
$my = "select * from persons where username='$person' and password='$pass'";
if (mysqli_connect_errno())
  {
  err (1);
  }
  $result = mysqli_query($con,$my);

 $row = @mysqli_fetch_array($result);
  if ( $row != false ){
	if (isset ($_POST["re"])){
	setcookie("username", $row["username"], time()+3600*24*365*1000);
	setcookie("pass", $row["password"], time()+3600*24*365*1000);

	$_SESSION['username']=$row["username"];
	$_SESSION['pass']=$row["password"];
	header("location: index.php");

	}
	else
	{
	$_SESSION['username']=$_POST["name"];
	$_SESSION['pass']=$_POST["pass"];
	header("location: index.php");

	}

}
else
{
echo "
<enterheader> <font color ='8A2BE2'> <br><br></font></enterheader>
<div style='
    margin-top: 122;
    margin-left: 300;
    margin-right: 550;
    background-color: #D1BBEC;
    margin-bottom: 194;
    padding-left: 10;
    /* background-position: center; */
    padding-top: 90;
    padding-bottom: 90;
'><h1>اسم المستخدم أو كلمة المرور خاطئة</h1>
<form method='post' action='entering.php'>
<label>الاسم<br></label><input type='text' name='name' id='box'><br>
<label>كلمة المرور<br></label><input type='password' name='pass' id='box'>
<input type='checkbox' name='remember' value='remember'>تذكرني <font size='0.5'>لا يفضل اختياره إذا كنت تستعمل حاسب يشترك به أكثر من واحد </font><br>
<input type='submit' id='sub' value='إرسال'>

</form></div>>

";
}
echo " </body></html>" ;
}
else{
echo "<h1> لقد تركت حقلاً فارغاً الرجاء إكماله <a href='index.php'>العودة للصفحة الرئيسية</a> </h1>";
}
}



?>










