<?php session_start(); 
if(isset($_SESSION['username']) and ($_SESSION['pass']))
$user = ($_SESSION['username']);
elseif (isset($_COOKIE["username"]) and ($_SESSION['pass']))
$user = ($_COOKIE["username"]);
else{
$user = "0";
}
if ($user == "0")
{
?>



<html>
<head>
<title>
<?php

  echo "الصقها:الصفحة الرئيسية";



?>
</title>
‎<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1256">‎
<link rel="stylesheet" type="text/css" href="all.css">
</head>
<body>
<header1><form method="post" action='entering.php'>
<label>الاسم<br></label><input type="text" name="name" id="box"><br>
<label>كلمة المرور<br></label><input type="password" name="pass" id="box">

<input type="checkbox" name="re" value="re">تذكرني <font size="0.5">لا يفضل اختياره إذا كنت تستعمل حاسب يشترك به أكثر من واحد </font><br>
<input type="submit" id="sub" value="إرسال">

</form></header1>
<br><br><br><br>
<br>
<br>
<br>
<br>

<br>

<br>

<signingup>
<h1>
لم تسجل بعد سارع بالتسجيل الآن
</h1>
<form method="post" action='enter.php'>
<label>الاسم<br></label><input type="text" name="name" id="sbox"><br>
<label>الإيميل<br></label><input type="text" name="email" id="sbox"><br>
سيتم إرسال كلمة المرور إلى الإيميل الذي تكتبه<br>
<input type="submit" id="ssub" value="إرسال">


 </signingup>


</body>
</html>
<?php
}
else
 {
 
echo "<html><head><title> $user </title>‎<META HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=windows-1256'>‎
<link rel='stylesheet' type='text/css' href='all.css'></head><body>
<header><a href='signout.php'>تسجيل الخروج</a><div align='right'>
<form method='post' action='pagy.php'>
‎<INPUT TYPE='hidden' name='person' value='$user'>‎

<input type='submit' name='pagy' id='pagy' value='$user'></form>
 </div></header>"; 
 
 echo "<div id='indent'><div id='posts'><br>
 </div></div>";
}
?>