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
 {
 
echo "<html><head><title> $user </title>�<META HTTP-EQUIV='Content-Type' CONTENT='text/html; charset=windows-1256'>�
<link rel='stylesheet' type='text/css' href='all.css'></head><body>
<header><a href='signout.php'>����� ������</a><div align='right'>
<form method='post' action='pagy.php'>
�<INPUT TYPE='hidden' name='person' value='$user'>�

<input type='submit' name='pagy' id='pagy' value='$user'></form>
 </div></header>"; 
 
 echo "<div id='indent'><div id='posts'><br>
 </div></div>";
}
?>