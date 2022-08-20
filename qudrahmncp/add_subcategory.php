<?php
include('chek_login.php');
ob_start();
include('operation.php');
$operation =new operation();
if($_REQUEST['Submit']=='Submit')
{
$add_category=$operation->add_subcategry($_POST,$_FILES);

 if($add_category)
 {
  $msg="Subcategory Added Successfully";
 }
 else
 {
    $msg="Cannot Added Subcategory   ";
 }
 header('location:subcategory.php?msg='.$msg);
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
              <td width="28%" align="left" valign="middle" class="right_tile"  style="color:#FFFFFF">Add New  Subcategory </td>
			   <td width="24%" align="left" valign="middle" class="right_tile"  style="color:#FFFFFF"><a href="subcategory.php" style="text-decoration:none; color:#FFFFFF;">Back</a></td>
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
  <tr  >
    <td width="35%" class="tdstyl_r">&nbsp;&nbsp;<b> Categery </b></td>
    <td width="29%" class="tdstyl_r">&nbsp;&nbsp;
      <select name="category_id">
        <? 
	$ordr='order by id desc';
	$categories=$operation->getdata('alqudrah_categories','*','','','',$ordr,'','');
	?>
        <option value=""  selected="selected">Select One </option>
        <? foreach($categories as $key => $val ){ extract($val);?>
        <option value="<?=$id?>" >
          <?=stripslashes($name)?>
          </option>
        <? }?>
      </select></td>
    <td width="36%" class="tdstyl_r">&nbsp;</td>
  </tr>
   <tr>
    <td class="tdstyl_r"><b>&nbsp;&nbsp;Subcategory Name</b></td>
    <td class="tdstyl_r">&nbsp;&nbsp;<input type="text" name="name" /></td>
    <td class="tdstyl_r">&nbsp;</td>
  </tr>
   <tr>
    <td class="tdstyl_r">&nbsp;</td>
    <td class="tdstyl_r">
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
