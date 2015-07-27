<?
session_start();
include "conf.php";
$TEMPLATE_link='template/'.sett_site('%Template_style%').'/';
include $TEMPLATE_link."template.inc";

/************ button *******************/
$result = mysql_query("Select * From pages where page_active=1  ORDER BY page_sort  ASC");
while ($row = mysql_fetch_array($result, MYSQL_NUM))
{
    if($id==$row[0]){$current='class="current"';}else{$current='';}
  $old_var = array("%row1%", "%row0%", "%current%");
  $new_var   = array($row[1],$row[0],$current);
  $button.= str_replace($old_var, $new_var, $button_temp);
}
/**************show page**************/
if($id){
    $result = mysql_query("Select * From pages where id=$id  and page_active=1 limit 1");
    $row = mysql_fetch_array($result, MYSQL_NUM);
    $content=$row[2];
}
/***************Setting******************/
$my_simple_tmplt = str_replace('%button%', $button, $my_simple_tmplt);
$my_simple_tmplt = str_replace('%content%', $content, $my_simple_tmplt);
$my_simple_tmplt = str_replace('%title%', sett_site('%title%'), $my_simple_tmplt);
$my_simple_tmplt = str_replace('%Copyrights%', sett_site('%Copyrights%'), $my_simple_tmplt);

/*foreach($_SERVER as $key=>$val){
  echo "$key : $val /n<br/>";
}
 */
echo $my_simple_tmplt;
?>

