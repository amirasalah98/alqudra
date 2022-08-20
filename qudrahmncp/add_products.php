<?php
include('chek_login.php');
ob_start();
include('operation.php');
$operation =new operation();
if($_REQUEST['Submit']=='Submit')
{
$add_category=$operation->add_products($_POST,$_FILES);

 if($add_category)
 {
  $msg="Products Added Successfully";
 }
 else
 {
    $msg="Cannot Added Products   ";
 }
 header('location:products.php?msg='.$msg);
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
              <td width="28%" align="left" valign="middle" class="right_tile"  style="color:#FFFFFF">Add New  Products </td>
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
      <select name="cat_id" onchange="get_subcat(this.value)">
        <? 
	$ordr='order by id desc';
	$categories=$operation->getdata('alqudrah_categories','*','','','','','');
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
    <td width="35%" class="tdstyl_r"><b>&nbsp;&nbsp;SubCategery</b></td>
    <td width="29%" class="tdstyl_r">&nbsp;&nbsp;<select name="scat_id" id="sub_cath">
        <? 
		
	$ordr='order by id desc';
	$categories=$operation->getdata('alqudrah_subcategories','*','','','','','');
	?>
        <option value=""  selected="selected">Select One </option>
        <? foreach($categories as $key => $val ){ extract($val);?>
        <option value="<?=$id?>" >
        <?=stripslashes($name)?>
        </option>
        <? }?>
      </select>
      <div id="sub_cat"></div>
      </td>
    <td width="36%" class="tdstyl_r">&nbsp;</td>
  </tr>
  
   <tr>
    <td class="tdstyl_r"><b>&nbsp;Product Name</b></td>
    <td class="tdstyl_r">&nbsp;&nbsp;<input type="text" name="name" /></td>
    <td class="tdstyl_r">&nbsp;</td>
  </tr>
  <tr>
    <td class="tdstyl_r"><b>&nbsp;Item Id</b></td>
    <td class="tdstyl_r">&nbsp;&nbsp;<input type="text" name="itemid" /></td>
    <td class="tdstyl_r">&nbsp;</td>
  </tr>
  <tr>
    <td class="tdstyl_r"><b>&nbsp;Manufacturer</b></td>
    <td class="tdstyl_r">&nbsp;&nbsp;<input type="text" name="m_name" /></td>
    <td class="tdstyl_r">&nbsp;</td>
  </tr>
  <tr>
    <td class="tdstyl_r"><b>&nbsp;Type</b></td>
    <td class="tdstyl_r">&nbsp;&nbsp;<input type="text" name="type" /></td>
    <td class="tdstyl_r">&nbsp;</td>
  </tr>
  <tr>
    <td class="tdstyl_r"><b>&nbsp;Serial</b></td>
    <td class="tdstyl_r">&nbsp;&nbsp;<input type="text" name="serial" /></td>
    <td class="tdstyl_r">&nbsp;</td>
  </tr>
  <tr>
    <td class="tdstyl_r"><b>&nbsp;Year</b></td>
    <td class="tdstyl_r">&nbsp;&nbsp;<input type="text" name="year" /></td>
    <td class="tdstyl_r">&nbsp;</td>
  </tr>
  
   <tr>
    <td class="tdstyl_r"><b>&nbsp;&nbsp;Details</b></td>
    <td class="tdstyl_r">&nbsp;&nbsp;
     <?
	
					include('fckeditor/fckeditor.php');
					$oFCKeditor1 = new FCKeditor('details') ;
					$oFCKeditor1->Height = "600px";
					$oFCKeditor1->Width = "600px";
					//$oFCKeditor1->ToolbarSet = "Basic";
					$oFCKeditor1->BasePath	= 'fckeditor/'; //$sBasePath ;
					$oFCKeditor1->Value		= $row['details'] ;
					$oFCKeditor1->Create() ;
				?>        </td>
    <td class="tdstyl_r">&nbsp;</td>
  </tr>
  <tr>
              <td colspan="6" align="left" valign="top" height="10" >
			  <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr >
    <td width="27%" class="tdstyl_b"><b>Image</b></td>
    <td width="47%" class="tdstyl_b">&nbsp;&nbsp;
      <label>
      <input type="file" name="icon" />
      <br />
    </label></td>
    
  </tr>
</table>			  </td>
			  </tr>
<tr ><td colspan="6"><div id="get_more_image_field"></div></td></tr>
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
   frmvalidator.addValidation("category_id","req","Please select categery,subcategery");
  </script>

<script language="JavaScript" type="text/javascript" >
function getsubct(str)
{
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
