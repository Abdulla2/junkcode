<?

if($edit==1 || $delete==1){ echo "this is master user <br>";$edit=0;$delete=0; }

if($act){
    $result = mysql_query("Select * From pages where id=$act");
    $row = mysql_fetch_array($result, MYSQL_NUM);
    if($row[5]){$val_act=0;}else{$val_act=1;}
    mysql_query("UPDATE `pages` SET page_active = '$val_act' WHERE `id`=$act");
    $error_msg="Activate done!";
}
if($delete){
  mysql_query("delete from pages where id=$delete");
  $error_msg="Deleted done!";
}

if ($sortnow){
foreach($no as $key => $value){
mysql_query ("UPDATE pages SET
page_sort = '$value' , page_place = '$place_ch[$key]'
WHERE ID = '$key' ");
}
}


if($edit){
  if($id_edit){
      mysql_query("UPDATE `pages` SET page_name = '$title_edit',Page_cont = '$FCKeditor1' WHERE `id`=$id_edit");
      $error_msg="update done!";
  }else{
    $result = mysql_query("Select * From pages where id=$edit");
    $row = mysql_fetch_array($result, MYSQL_NUM);
    $FCKeditor1=$row[2];
    $old_var = array("%title_edit%", "%id_edit%","%id_edit_name%", "%update%");
    $new_var   = array($row[1],$edit,"id_edit","Update");
    $admin_page_from_text1 = str_replace($old_var, $new_var, $Template_page_page1);
    $admin_page_from_text2 = str_replace($old_var, $new_var, $Template_page_page2);
}
}

if($addnew){
  if($id_new){

      mysql_query("INSERT INTO pages (  `id` ,`page_name` ,`Page_cont`)VALUES (NULL , '$title_edit', '$FCKeditor1');");
      $error_msg="done!";
  }else{
$old_var = array("%title_edit%", "%id_edit%","%id_edit_name%", "%update%");
$new_var   = array("","1","id_new","Add new");
$admin_page_from_text1 = str_replace($old_var, $new_var, $Template_page_page1);
$admin_page_from_text2 = str_replace($old_var, $new_var, $Template_page_page2);
  }
}



$admin_page_text="
 <br> <form method='POST'><a href='?p=$p&addnew=1'>Add new</a>
<table style='width: 40%'>
	<tr>
		<td>Nu.</td>
		<td>Page title</td>
		<td>Sort</td>
		<td>Place</td>
		<td>Active</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
";
$result = mysql_query("Select * From pages  ORDER BY page_sort  ASC");
$old_var = array("%place_ch%", "%sel[1]%","%sel[2]%");
while ($row = mysql_fetch_array($result, MYSQL_NUM))
{
  $no1='no['.$row[0].']';
  $place_ch='place_ch['.$row[0].']';
  $sel='';
  $sel[$row[4]]="selected='selected'";
  $new_var   = array($place_ch,$sel[1],$sel[2]);


  $admin_page_text.= "
	<tr>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td><input type='text' name='$no1' size='5' Value='$row[3]'></td>
		<td>";
        $admin_page_text.= str_replace($old_var, $new_var, $place_page);
        $admin_page_text.="</td>
		<td><a href='?p=$p&act=$row[0]'><img src='images/$row[5]act.png' alt='Active/Deactive' border=0 /></a></td>

		<td><a href='?p=$p&edit=$row[0]'><img src='images/edit.gif' alt='edit' border=0 /></a></td>
		<td><a href='?p=$p&delete=$row[0]'><img src='images/delete.gif' alt='delete' border=0 /></a></td>
	</tr>
  ";
}
$admin_page_text.= "</table><input type='submit' value='Sort now' name='sortnow'></form>";

?>