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

  echo "������:������ ��������";



?>
</title>
�<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1256">�
<link rel="stylesheet" type="text/css" href="all.css">
</head>
<body>
<header1><form method="post" action='entering.php'>
<label>�����<br></label><input type="text" name="name" id="box"><br>
<label>���� ������<br></label><input type="password" name="pass" id="box">

<input type="checkbox" name="re" value="re">������ <font size="0.5">�� ���� ������� ��� ��� ������ ���� ����� �� ���� �� ���� </font><br>
<input type="submit" id="sub" value="�����">

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
�� ���� ��� ���� �������� ����
</h1>
<form method="post" action='enter.php'>
<label>�����<br></label><input type="text" name="name" id="sbox"><br>
<label>�������<br></label><input type="text" name="email" id="sbox"><br>
���� ����� ���� ������ ��� ������� ���� �����<br>
<input type="submit" id="ssub" value="�����">


 </signingup>


</body>
</html>
<?php
}
else
echo "<html><head><title> $person </title>�<META HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=windows-1256'>�
<link rel='stylesheet' type='text/css' href='all.css'></head><body>
<header><a href='signout.php'>����� ������</a><div align='right'>
<form method='GET' action='pagy.php'>
�<INPUT TYPE='hidden' name='person' value='$person'>�

<input type='submit' name='pagy' id='pagy' value='�����'>
</form>
�&nbsp;� �&nbsp;� �&nbsp;��&nbsp;� �&nbsp;� �&nbsp;�
�&nbsp;� �&nbsp;� �

<form method='get' action='per.php'>
�<INPUT TYPE='hidden' name='person' value='$person'>�

<input type='submit' name='following' id='pagy2' value='��������'>
</form>
 </div></header><br><br><br><br><br><br><div id='indent'><br><br><br><br> <form method='post' action='post.php' id='poost'>
 <input type='text' name='post' id='postit'>
 <input type='submit' name='send' id='postse' value'�����'>
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
 </h3><font size='0.5'> ��� ������
 $writer 
</font><br>--------------------------------------------------<br>
 </div></div>";
   }
}
}


?>