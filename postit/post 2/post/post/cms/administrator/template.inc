<?
//??? ?? ???? ??????? ??? ????
// template.inc
// ???? ??? ???? ??????? ???? ????? ??? ????? ?? ????? ??????? ??? ????? ???? ???
//???? ????? ????? ???? ??????
$Template_admin_edit='<form method="POST">
	<div align="center">
		<table border="1" width="100" cellspacing="1">
			<tr>
				<td>
	<font color="#014D5F"><b>User</b></font></td>
				<td><font color="#FF0000"><input name="user_edit" value="%user_edit%" size="20" style="font-weight: 700"></font></td>
			</tr>
			<tr>
				<td>
	<font color="#014D5F"><b>Password</b></font></td>
				<td><font color="#FF0000">
	<input name="pass_edit" type="text" value="%pass_edit%" style="font-weight: 700" size="20"></font></td>
			</tr>
		</table>
	</div>
	<p align="center" style="margin-top: 0; margin-bottom: 0">
	&nbsp;</p>
	<p align="center" style="margin-top: 0; margin-bottom: 0">
	<font color="#FF0000">
    <input type="hidden" name="%id_edit_name%" value="%id_edit%" />
	<input type="submit" value="%update%" style="font-weight: 700"><input type="submit" name="cancel" value="cancel" style="font-weight: 700"></font></p>
</form>';


$Template_sett_page='<form method="POST">
	<div align="center">
		<table border="1" width="100" cellspacing="1">
			<tr>
				<td>
	<font color="#014D5F"><b>Setting name</b></font></td>
				<td><font color="#FF0000"><input name="sett_edit" value="%sett_edit%" size="20" style="font-weight: 700"></font></td>
			</tr>
			<tr>
				<td>
	<font color="#014D5F"><b>Value</b></font></td>
				<td><font color="#FF0000">
	<textarea name="val_edit"  name="x" rows="8" cols="80">%val_edit%</textarea></font></td>
			</tr>
		</table>
	</div>
	<p align="center" style="margin-top: 0; margin-bottom: 0">
	&nbsp;</p>
	<p align="center" style="margin-top: 0; margin-bottom: 0">
	<font color="#FF0000">
    <input type="hidden" name="%id_edit_name%" value="%id_edit%" />
	<input type="submit" value="%update%" style="font-weight: 700"><input type="submit" name="cancel" value="cancel" style="font-weight: 700"></font></p>
</form>';

$Template_page_page1='<form method="POST">
	<div align="center">
		<table border="1" width="600" cellspacing="1">
			<tr>
				<td>
	<font color="#014D5F"><b>Page title</b></font></td>
				<td><font color="#FF0000"><input name="title_edit" value="%title_edit%" size="20" style="font-weight: 700"></font></td>
			</tr>
			<tr>
				<td colspan="2">
	<font color="#014D5F"><b>Content</b></font></td>   </tr><tr>
				<td colspan="2"><font color="#FF0000">';

$Template_page_page2='</font></td>
			</tr>
		</table>
	</div>
	<p align="center" style="margin-top: 0; margin-bottom: 0">
	&nbsp;</p>
	<p align="center" style="margin-top: 0; margin-bottom: 0">
	<font color="#FF0000">
    <input type="hidden" name="%id_edit_name%" value="%id_edit%" />
	<input type="submit" value="%update%" style="font-weight: 700"><input type="submit" name="cancel" value="cancel" style="font-weight: 700"></font></p>
</form>';

$place_page="
  <select name='%place_ch%'>
    <option value='0' selected='selected'>Please Select</option>
    <option %sel[1]% value='1'>Up</option>
    <option %sel[2]% value='2'>Down</option>
  </select>
";

$template_add_new='
<form name="frm" action="" method="POST" enctype="multipart/form-data">
   %zipfilename% <br/>
   <input type="file" name="zipfile">
   <input type="hidden" name="id_new" value="1"/>
   <input type="submit" name="okupload" value="%upload%" />
</form>
';
?>