<?
 if($edit<5 && $edit){ echo "this is master setting <br>";$edit=0; }
 if($delete<5 && $delete){ echo "this is master setting <br>";$delete=0; }
if($delete){
  mysql_query("delete from sett where id=$delete");
  $error_msg="Deleted done!";
}


if($edit){
  if($id_edit){
      mysql_query("UPDATE `sett` SET `s_string` = '$sett_edit',`s_value` = '$val_edit' WHERE `id`=$id_edit");
      $error_msg="update done!";
  }else{
    $result = mysql_query("Select * From sett where id=$edit");
    $row = mysql_fetch_array($result, MYSQL_NUM);

$old_var = array("%sett_edit%", "%val_edit%", "%id_edit%","%id_edit_name%", "%update%");
$row[2]=htmlspecialchars($row[2]);
$new_var   = array($row[1],$row[2],$edit,"id_edit","Update");
$admin_page_from_text = str_replace($old_var, $new_var, $Template_sett_page);
  }
}

if($addnew){
  if($id_new){

      mysql_query("INSERT INTO `sett` (  `id` ,`s_string` ,`s_value`)VALUES (NULL , '$sett_edit', '$val_edit');");
      $error_msg="done!";
  }else{

$old_var = array("%sett_edit%", "%val_edit%", "%id_edit%","%id_edit_name%", "%update%");
$new_var   = array("","","1","id_new","Add new");
$admin_page_from_text = str_replace($old_var, $new_var, $Template_sett_page);
  }
}



$admin_page_text="
 <br> <a href='?p=$p&addnew=1'>Add new</a>
<table style='width: 40%'>
	<tr>
		<td>Nu.</td>
		<td>Setting name</td>
		<td>Value</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
";
$result = mysql_query("Select * From sett");
while ($row = mysql_fetch_array($result, MYSQL_NUM))
{
  $admin_page_text.= "
	<tr>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td><a href='?p=$p&edit=$row[0]'><img src='images/edit.gif' alt='edit' border=0 /></a></td>
		<td><a href='?p=$p&delete=$row[0]'><img src='images/delete.gif' alt='delete' border=0 /></a></td>
	</tr>
  ";
}
$admin_page_text.= "</table>";

?>