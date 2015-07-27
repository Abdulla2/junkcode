<?php 
session_start(); 
if(isset($_SESSION['username']) and ($_SESSION['pass']))
header("location: index.php");
elseif (isset($_COOKIE["username"]) and ($_COOKIE['pass']))
header("location: index.php");
else {
  include ("connection.php");
  echo "<html><head><title>التسجيل</title><meta http-equiv='content-type' content='text/html; charset=utf-8'> <link rel='stylesheet' type='text/css' href='all.css'>
</head><body>
";
if (isset ($_POST["name"]) and $_POST["email"]){
$person = $_POST["name"] ;
$email = $_POST["email"];
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
  {
  $emailErr = "<h1>صياغة خاطئة للإيميل <a href='index.php'>العودة للصفحة الرئيسية</a> </h1>"; 
 echo $emailErr;
}
else {
$random = rand() ;
$message = "hi $person <br> you have signed up as $person and your password is $random " ;
//mail($email,"signing up",$message) or die ("problem sending email");
$con=mysqli_connect($host,$user,$pass,$db);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create table
$q1 = "INSERT INTO persons 
VALUES ('','$person','$random','$email')";
// Execute query
if (mysqli_query($con,$q1))
  {
  echo "you have signed up succesfully<br> an email will be sent for you";
  }
else
  {
  echo "Error try again ";
  }


 }
}
else
 {
echo "<h1>لقد تركت حقلاً فارغاً الرجاء إكماله</h1><br><form method='post' action='enter.php'>
<label>الاسم<br></label><input type='text' name='name' id='sbox'><br>
<label>الإيميل<br></label><input type='text' name='email' id='sbox'><br>
سيتم إرسال كلمة المرور إلى الإيميل الذي تكتبه<br>
<input type='submit' id='ssub' value='إرسال'>";
}

}


?>






