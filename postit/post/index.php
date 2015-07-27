<?php session_start(); 
if(isset($_SESSION['username']) and ($_SESSION['pass']))
$person = ($_SESSION['username']);
elseif (isset($_COOKIE["username"]) and ($_SESSION['pass']))
$person = ($_COOKIE["username"]);
else{
$person = "0";
}
if ($person == "0")
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
echo "<html><head><title> $person </title>‎<META HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=windows-1256'>‎
<link rel='stylesheet' type='text/css' href='all.css'></head><body>
<header><a href='signout.php'>تسجيل الخروج</a><div align='right'>
<form method='GET' action='pagy.php'>
‎<INPUT TYPE='hidden' name='person' value='$person'>‎

<input type='submit' name='pagy' id='pagy' value='صفحتي'>
</form>
‎&nbsp;‎ ‎&nbsp;‎ ‎&nbsp;‎‎&nbsp;‎ ‎&nbsp;‎ ‎&nbsp;‎
‎&nbsp;‎ ‎&nbsp;‎ ‎

<form method='get' action='per.php'>
‎<INPUT TYPE='hidden' name='person' value='$person'>‎

<input type='submit' name='following' id='pagy2' value='المتابعة'>
</form>
 </div></header><br><br><br><br><br><br><div id='indent'><br><br><br><br> <form method='post' action='post.php' id='poost'>
 <input type='text' name='post' id='postit'>
 <input type='submit' name='send' id='postse' value'إرسال'>
 </form>"; 
 {
 include ("connection.php");
$con=mysqli_connect($host,$user,$pass,$db);
if (mysqli_connect_errno())
  {
  err (1);
  }
  $ql = "select * from following where follower='$person'";

  $result = mysqli_query($con,$ql);
  while($row = mysqli_fetch_array($result))
  {
  $fo = $row["following"];
  
     $sql = "select * from posts where writer='$fo'";

  $resul = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($resul))
  {
  $post = $row['post'];
  $writer = $row['writer'];

 
 echo "<div id='posts'><br><h3>  $post 
 </h3><font size='0.5'> كتب بواسطة
 $writer 
</font><br>--------------------------------------------------<br>
 </div></div>";
   }
}
}


?>