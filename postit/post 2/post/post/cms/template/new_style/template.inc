<?
$my_simple_tmplt='
<!--Force IE6 into quirks mode with this comment tag-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dynamic Drive: CSS Top and Bottom Frames Layout</title>
<link rel="stylesheet" type="text/css" href="'.$TEMPLATE_link.'cms.css" />
</head>

<body>

<div id="framecontentTop">
<div class="innertube">

<h1>%title%</h1>
 <div class="aerobuttonmenu">

%button%
</div>

</div>
</div>
%content%
<div id="framecontentBottom">
<div class="innertube">

<h6><a href="http://www.arabteam2000-forum.com/index.php?showtopic=183291">%Copyrights%</a></h6>

</div>
</div>


<div id="maincontent">
<div class="innertube">


<p style="text-align: center">%content%</p>

</div>
</div>


</body>
</html>';

$button_temp='<a href="?id=%row0%" class="aero"><span>%row1%</span></a>';

?>