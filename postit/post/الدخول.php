<?php
$con=mysqli_connect("localhost","main","abc123","main");
// Check connection
if (mysqli_connect_errno())
  {
  echo "���� ��� ���� �������� ��� ���� " ;
  }

$result = mysqli_query($con,"SELECT * FROM persons
WHERE name=$_POST["entername"] and $_POST["enterpassword"];");

$row = mysqli_fetch_array($result
mysqli_close($con);
echo "<html>
<head>
<link rel='stylesheet' type='text/css' href='�����.css'>
<title>";
echo $row;
echo "</title>
�<META HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=windows-1256'>�
</head>
<body>
<h1><img src='����.jpg' alt="post_����" ALIGN="RIGHT"HEIGHT='50' WIDTH='120'> <a href='person.php'>����</a>&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;<a href='set.php'>����������</a>&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;<a href='������.php'>���������</a>&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;�&nbsp;</h1></body></html>";

?>