<?php
include('chek_login.php');
ob_start();
include('operation.php');
$operation =new operation();

if(isset($_REQUEST['del_mage'])&&$_REQUEST['del_mage']!='' )
{
  $del_mage=$_REQUEST['del_mage'];
  $file_path     = 'images/alqudrah_images/'.$del_mage;
  $operation->unlinkfile($file_path);
				  
  $file_path     = 'images/alqudrah_images/thump/'.$del_mage;
  $operation->unlinkfile($file_path);
  $operation->delete('images','prod_image',"'$del_mage'");

}


if($_REQUEST['Submit']=='Submit')
{
$add_category=$operation->edit_products($_POST,$_FILES);

 if($add_category)
 {
  $msg="Products Edited Successfully";
 }
 else
 {
    $msg="Cannot Edited Products   ";
 }
 header('location:products.php?msg='.$msg);
}

if(isset($_GET['id']))
{
$products=$operation->getdata_1('alqudrah_products','*','id',$_GET['id'],$cond);
}




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript"  src="js/ajx_js.js" ></script>

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
              <td width="28%" align="left" valign="middle" class="right_tile"  style="color:#FFFFFF">Edit   Products </td>
			   <td width="24%" align="left" valign="middle" class="right_tile"  style="color:#FFFFFF"><a href="products.php" style="text-decoration:none; color:#FFFFFF;">Back</a></td>
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
    <td width="35%" class="tdstyl_r"><b>&nbsp;&nbsp;Categery</b></td>
    <td width="29%" class="tdstyl_r">&nbsp;&nbsp;
      <select name="cat_id">
        <? 
	$ordr='order by id desc';
	$categories=$operation->getdata('alqudrah_categories','*','','','','','');
	?>
        <option value=""  selected="selected">Select One </option>
        <? foreach($categories as $key => $val ){ extract($val);?>
        <option value="<?=$id?>" >
        <?=$name?>
        </option>
        <? }?>
      </select></td>
    <td width="36%" class="tdstyl_r">&nbsp;</td>
  </tr>
  <tr>
    <td width="35%" class="tdstyl_r"><b>&nbsp;&nbsp;SubCategery</b></td>
    <td width="29%" class="tdstyl_r">&nbsp;&nbsp;
      <select name="scat_id">
        <? 
	$ordr='order by id desc';
	$categories=$operation->getdata('alqudrah_subcategories','*','','','','','');
	?>
        <option value=""  selected="selected">Select One </option>
        <? foreach($categories as $key => $val ){ extract($val);?>
        <option value="<?=$id?>" >
        <?=$name?>
        </option>
        <? }?>
      </select></td>
    <td width="36%" class="tdstyl_r">&nbsp;</td>
  </tr>
   <? extract($products); ?>
   <tr>
    <td class="tdstyl_r"><b> Product Name</b></td>
    <td class="tdstyl_r">&nbsp;&nbsp;<input type="text" name="name" value="<?=$name?>"/></td>
    <td class="tdstyl_r">&nbsp;</td>
  </tr>
   <tr>
    <td class="tdstyl_r"><b> Manufacturer</b></td>
    <td class="tdstyl_r">&nbsp;&nbsp;<input type="text" name="m_name" value="<?=$manufacturer?>"/></td>
    <td class="tdstyl_r">&nbsp;</td>
  </tr>
   <tr>
    <td class="tdstyl_r"><b> Type</b></td>
    <td class="tdstyl_r">&nbsp;&nbsp;<input type="text" name="type" value="<?=$type?>"/></td>
    <td class="tdstyl_r">&nbsp;</td>
  </tr>
   <tr>
    <td class="tdstyl_r"><b> Serial</b></td>
    <td class="tdstyl_r">&nbsp;&nbsp;<input type="text" name="serial" value="<?=$serial?>"/></td>
    <td class="tdstyl_r">&nbsp;</td>
  </tr>
   <tr>
    <td class="tdstyl_r"><b> Year</b></td>
    <td class="tdstyl_r">&nbsp;&nbsp;<input type="text" name="year" value="<?=$year?>"/></td>
    <td class="tdstyl_r">&nbsp;</td>
  </tr>
   <tr>
    <td class="tdstyl_r"><b>&nbsp;&nbsp;Details</b></td>
    <td class="tdstyl_r">&nbsp;&nbsp;&nbsp;&nbsp;
      <?
	
					include('fckeditor/fckeditor.php');
					$oFCKeditor1 = new FCKeditor('details') ;
					$oFCKeditor1->Height = "600px";
					$oFCKeditor1->Width = "600px";
					//$oFCKeditor1->ToolbarSet = "Basic";
					$oFCKeditor1->BasePath	= 'fckeditor/'; //$sBasePath ;
					$oFCKeditor1->Value		= $details;
					$oFCKeditor1->Create() ;
				?>      </td>
    <td class="tdstyl_r">&nbsp;</td>
  </tr>
  <tr>
    <td width="38%" class="tdstyl_r"><b>&nbsp;&nbsp;Image<strong></strong></b></td>
    <td colspan="2" class="tdstyl_r">&nbsp;&nbsp;<img src="images/alqudrah_products/thump/<?=$image?>" />
    <input name="edit_image" type="hidden" value="<?=$image?>" />
    <input name="icon" type="file" /> </td>
    </tr>
   <tr>
              <td colspan="6" align="left" valign="top" height="10" >
			  <table width="100%" border="0" cellpadding="0" cellspacing="0">
 
</table>			  </td>
			  </tr>
<tr ><td colspan="6"><div id="get_more_image_field"></div></td></tr>
   <tr>
    <td class="tdstyl_r">&nbsp;</td>
    <td class="tdstyl_r">
      <input type="submit" name="Submit" value="Submit" />
      <input type="hidden" name="edit_id" id="edit_id" value="<?=$id?>" /></td>
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
    <td colspan="2" align="left" valign="top" >&nbsp;</td>
  </tr>
</table>

</body>
<script language="JavaScript" type="text/javascript" xml:space="preserve">
  var frmvalidator  = new Validator("form_category");
  frmvalidator.EnableMsgsTogether();
   frmvalidator.addValidation("category_id","req","Please select categery,subcategery");
   frmvalidator.addValidation("price","req","Please enter product name");
  
</script>

<script language="JavaScript" type="text/javascript" >
function getsubct(str)
{
  document.getElementById("disp_first").style.display="none";
if (str=="")
  {
  document.getElementById("subcat").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("subcat").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","get_subcategery.php?cat_id="+str,true);
xmlhttp.send();
}
</script>

</html>
