<?
$my_simple_tmplt='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<link rel="stylesheet" type="text/css" href="'.$TEMPLATE_link.'cms.css" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>%title%</title>
</head>
<body>
<div id="maincontainer">

<div id="topsection"><div class="innertube">%title%<br><br>
<ul class="solidblockmenu">
%button%
</ul>
</div></div>

<div id="contentwrapper">
<div id="contentcolumn">
<div class="innertube"><b>%content%</div>
</div>
</div>

<div id="rightcolumn">

<div class="arrowlistmenu">

<h3 class="headerbar">CSS Library</h3>
<ul>
%button%
</ul>

</div>

</div>

<div id="footer"><a href="http://www.arabteam2000-forum.com/index.php?showtopic=183291">%Copyrights%</a></div>

</div>
</body>
</html>
';
$button_temp='<LI><A href="?id=%row0%" %current%>%row1%</A></LI>';
?>