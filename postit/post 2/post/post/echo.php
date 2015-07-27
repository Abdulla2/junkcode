<?php
function header($title,$header,$body){
echo 
?>
<html>
<head
<title>
<?php

echo $title;
?>
</title>
‎<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=windows-1256">‎
<link rel="stylesheet" type="text/css" href="all.css">
</head>
<body>
<header>
<?php
echo $header;
?>
</header>
<body>
<?php
echo $body;
?>
</body>
</html>
<?php
}
header("hi","hi","hi");
?>