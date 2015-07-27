<?
 if($edit==1 || $delete==1){ echo "this is master user <br>";$edit=0;$delete=0; }
// ????E C???? ???E ?? E??? ?E? ????E C????
if($delete){
  mysql_query("delete from users where id=$delete");
  $error_msg="Deleted done!";
}

// ????E C?E?I?? ?E?EC? ??? ????? ?E?I?? C?E?C?CE
if($edit){
  if($id_edit){  // E? ???C? C??????
      mysql_query("UPDATE `users` SET `user_name` = '$user_edit',`user_pass` = '$pass_edit' WHERE `id`=$id_edit");
      $error_msg="update done!";
  }else{ // ??OC? C?????? ???? C?E?C?CE ???
    $result = mysql_query("Select * From users where id=$edit");
    $row = mysql_fetch_array($result, MYSQL_NUM);
    // ??E? ?I? C?????? ?? ???E C???C?E
$old_var = array("%user_edit%", "%pass_edit%", "%id_edit%","%id_edit_name%", "%update%");  //C??EU??CE ?? ???E C???C?E
$new_var   = array($row[1],$row[2],$edit,"id_edit","Update");    // C??EU??CE C??????E
$admin_page_from_text = str_replace($old_var, $new_var, $Template_admin_edit);  // ????E ??EEIC? C??EU??CE ?? ???E C???C?E ??? C??EU??CE C??????E
  }
}

if($addnew){
  if($id_new){

      mysql_query("INSERT INTO `blood_cms`.`users` (  `id` ,`user_name` ,`user_pass`)VALUES (NULL , '$user_edit', '$pass_edit');");
      $error_msg="done!";
  }else{

$old_var = array("%user_edit%", "%pass_edit%", "%id_edit%","%id_edit_name%", "%update%");
$new_var   = array("","","1","id_new","Add new");
$admin_page_from_text = str_replace($old_var, $new_var, $Template_admin_edit);
  }
}



$admin_page_text="
 <br> <a href='?p=$p&addnew=1'>Add new</a>
<table style='width: 40%'>
	<tr>
		<td>Nu.</td>
		<td>Name</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
"; // ??C ?I?? ?E?? ?E? ??OC?? ?? ???? ?? ???? ?E?? ?E? I??? ????
$result = mysql_query("Select * From users");
while ($row = mysql_fetch_array($result, MYSQL_NUM))
{
  $admin_page_text.= "
	<tr>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td><a href='?p=$p&edit=$row[0]'><img src='images/edit.gif' alt='edit' border=0 /></a></td>
		<td><a href='?p=$p&delete=$row[0]'><img src='images/delete.gif' alt='delete' border=0 /></a></td>
	</tr>
  ";
}
$admin_page_text.= "</table>";

?>