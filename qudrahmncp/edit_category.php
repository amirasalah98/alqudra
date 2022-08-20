<?php
ob_start();
include('chek_login.php');
include('operation.php');
$operation =new operation();

if($_REQUEST['Submit']=='Submit')
{
$add_category=$operation->edit_categry($_POST,$_FILES);
//echo $add_category;
 if($add_category)
 {
  $msg="Category Edited Successfully";
 }
 else
 {
    $msg="Cannot Edited Category   ";
 }
 header('location:category.php?msg='.$msg);
}


if(isset($_GET['id']))
{
$bpgr_subcategories=$operation->getdata_1('alqudrah_categories','*','id',$_GET['id'],$cond);
}





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>

</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" align="left" valign="middle" class="top"><? include('top.php')?></td>
  </tr>
  <tr>
    <td height="12" colspan="2" align="left" valign="top"></td>
  </tr>
  <tr>
    <td width="20%" align="left" valign="top"><br /><?php include("menu.php"); ?>
    
    </td>
    <td width="80%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">

      <tr>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top">
		<table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" class="bdr">
		  <tr>
              <td width="28%" align="left" valign="middle" class="right_tile"  style="color:#FFFFFF">Edit  Category </td>
			   <td width="24%" align="left" valign="middle" class="right_tile"  style="color:#FFFFFF"><a href="category.php" style="text-decoration:none; color:#FFFFFF;">Back</a></td>
			   <td width="44%" align="center" valign="middle" class="right_tile" style="color:#FFFFFF">&nbsp;</td>
			   <td colspan="2" align="center" valign="middle" class="right_tile"s tyle="color:#FFFFFF">&nbsp;</td>
		        <td width="4%" align="center" valign="middle" class="right_tile" style="color:#FFFFFF"></td>
            </tr>
			 <tr>
              <td colspan="6" align="left" valign="top" height="10" >&nbsp;</td>
			  </tr>
            <tr>
              <td height="30" colspan="6" align="left" valign="top"  class="tdstyl_r">
			  <form action="" enctype="multipart/form-data" name="form_category" id="form_category" method="post">
			  <table width="80%"  cellspacing="0"  cellpadding="0">
  
   <tr>
    <td class="tdstyl_r"><b>&nbsp;&nbsp;Category Name</b></td>
    <td class="tdstyl_r"><? extract($bpgr_subcategories);
 ?><input type="text" name="name" value="<?=stripslashes($name)?>" /></td>
    <td class="tdstyl_r">&nbsp;</td>
  </tr>
   <tr>
    <td class="tdstyl_r">&nbsp;</td>
    <td class="tdstyl_r">
	<input name="edit_id" type="hidden" value="<?=$id?>" />
	<input name="edit_image" type="hidden" value="<?=$image_logo?>" />
      <input type="submit" name="Submit" value="Submit" />   </td>
    <td class="tdstyl_r">&nbsp;</td>
  </tr>
</table>
</form>
			  </td>
			  </tr>
        </table>
		</td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top">&nbsp;</td>
  </tr>
</table>

</body>
<script language="JavaScript" type="text/javascript" xml:space="preserve">
  var frmvalidator  = new Validator("form_category");
  frmvalidator.EnableMsgsTogether();
   frmvalidator.addValidation("group","req","Please select group name");

 
  frmvalidator.addValidation("name","req","Please enter categrory name");
  frmvalidator.addValidation("name","maxlen=20",	"Max length for FirstName is 20");
 
  
</script>

</html>
