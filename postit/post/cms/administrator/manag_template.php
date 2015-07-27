<?php
$admin_page_text="<br/>";
/****************Edit setting template*****************/
if($file_pik){
   mysql_query("UPDATE `sett` SET  `s_value` = '$file_pik' WHERE `s_string`='%Template_style%'");
   $error_msg="done!";
}
/*****************Add new*******************/
if($addnew){
  if($id_new){
    $uploaddir = '../template/';
    $uploadfile = $uploaddir . basename($_FILES['zipfile']['name']);
    if (move_uploaded_file($_FILES['zipfile']['tmp_name'], $uploadfile)) {
      shell_exec("unzip ".$_SERVER['DOCUMENT_ROOT']."/template/".basename($_FILES['zipfile']['name'])." -d ".$_SERVER['DOCUMENT_ROOT']."/template/");
      unlink ($uploadfile);
        $error_msg= "File is valid, and was successfully uploaded.\n";
    } else {
        $error_msg= "Possible file upload attack!\n";
    }
  }else{
$old_var = array("%zipfilename%", "%upload%");
$new_var   = array(".zip file :","Upload Now");
$admin_page_text = str_replace($old_var, $new_var, $template_add_new);

  }
}else{
  $admin_page_text.= "<a href='?p=$p&addnew=1'>Add new template</a> <br/>\n";
}
/***************Read Dir***************/
$dir = "../template/";
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
          if($file=='.' || $file=='..' || filetype($dir . $file)!='dir'){}else{
                if(sett_site('%Template_style%')==$file){$admin_page_text.= "&gt;$file<br/>\n";
                }else{$admin_page_text.= "<a href='?p=$p&file_pik=$file'>$file</a> <br/>\n";}
            }
        }
        closedir($dh);
    }

?>