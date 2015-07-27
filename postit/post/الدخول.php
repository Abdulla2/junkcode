<?php
$con=mysqli_connect("localhost","main","abc123","main");
// Check connection
if (mysqli_connect_errno())
  {
  echo "هناك خطأ نرجو المحاولة مرة أخرى " ;
  }

$result = mysqli_query($con,"SELECT * FROM persons
WHERE name=$_POST["entername"] and $_POST["enterpassword"];");

$row = mysqli_fetch_array($result
mysqli_close($con);
echo "<html>
<head>
<link rel='stylesheet' type='text/css' href='رئيسي.css'>
<title>";
echo $row;
echo "</title>
‎<META HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=windows-1256'>‎
</head>
<body>
<h1><img src='ملصق.jpg' alt="post_ملصق" ALIGN="RIGHT"HEIGHT='50' WIDTH='120'> <a href='person.php'>‎أنا</a>&nbsp;‎&nbsp;‎&nbsp;‎&nbsp;‎&nbsp;‎&nbsp;‎&nbsp;‎&nbsp;<a href='set.php'>‎الإعدادات</a>&nbsp;‎&nbsp;‎&nbsp;‎&nbsp;‎&nbsp;‎&nbsp;‎&nbsp;‎&nbsp;<a href='الدخول.php'>‎الرئيسية</a>&nbsp;‎&nbsp;‎&nbsp;‎&nbsp;‎&nbsp;‎&nbsp;‎&nbsp;‎&nbsp;</h1></body></html>";

?>