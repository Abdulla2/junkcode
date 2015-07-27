<?php
if (isset ($_GET["person"])){
$person = $_GET["person"];
}
else
{
header("location: index.php");
}
include ("connection.php");
$con=mysqli_connect($host,$user,$pass,$db);
if (mysqli_connect_errno())
  {
  err (1);
  }
  $sql = "select * from posts where writer='$person'";

  $result = mysqli_query($con,$sql);

?>
<html><html>
<head>
<title>
<?php
echo $person ;
?></title>
		<meta charset='utf-8'>

<link rel='stylesheet' type='text/css' href='all.css'>
</head><body><header2><a href='signout.php'>تسجيل الخروج</a><font color='white'><h1><?php
echo $person ;
?> </h1></font></header2><br><br><br><br>
<?php
while($row = mysqli_fetch_array($result))
  {
  $post = $row['post'];
  $writer = $row['writer'];
  ?>
<div align='center'><br><h3> <?php
echo $post ;
?> </h3><font size='0.5'> كتب بواسطة<?php
echo $writer ;
?></font><br>--------------------------------------------------</div>
<?php
 }
 ?>
</body></html>



