﻿<?
$db_host="localhost";
$db_name="cms"; // ??? ????? ???????? ???? ???? ???????? ?? ???
$db_user="root"; // ??? ?????? ???????
$db_pass="";   // ???? ???? ???????? ????? ?????? ????????
$link = mysql_connect("localhost",$db_user,$db_pass)or die ('I cannot connect to the database because: ' . mysql_error());
$db_selected = mysql_select_db($db_name, $link);
// ?? ??? ???? ?????? ??? ?????? ??? ?? ???? ???? ????? ???? ??? ??? ????? ?????? ?????? ?????? ???????? ????? ??? ???? ??? ?? ????????? ???? ??? ????????
// ????? ????? ??? ?????? ???? ??? ???
// http://localhost/site/conf.php
mysql_query("set character_set_server 'utf8'");
mysql_query ("set names 'utf8'");

/***************Setting Function *****************/
function sett_site($word){
    $result = mysql_query("Select * From sett where s_string ='$word'");
    $row = mysql_fetch_array($result, MYSQL_NUM);
    return $row[2];
}

?>

