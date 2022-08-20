<?php
include('chek_login.php');
include('operation.php');
$operation =new operation();





if(isset($_GET['fn'])&&$_GET['fn']='del')
{
 extract($_GET);
  $products=$operation->getdata_1('alqudrah_products','image,image1,image2','id',$del_id,$cond);
   
   extract($products);
   
   $operation->unlinkfile("images/alqudrah_products/$image");
   $operation->unlinkfile("images/alqudrah_products/thump/$image");
   
    $operation->unlinkfile("images/alqudrah_products/$image1");
	$operation->unlinkfile("images/alqudrah_products/thump/$image1");
	
	$operation->unlinkfile("images/alqudrah_products/$image2");
	$operation->unlinkfile("images/alqudrah_products/thump/$image2");
		  
 $delete=$operation->delete('alqudrah_products','id',$del_id);
 if($delete){   $msg="Product Deleted Successfully";}
}

$limit=25;
$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;		
$targetpage = "products.php";

$sub =0;

extract($_GET);

$var='';
$cond='';
$ordr='';
if($cat_id==0||$cat_id=='')
{
 unset($_SESSION['cat_id']);
}


if(isset($cat_id)&&$cat_id!=''&&$cat_id!=0)
{
$_SESSION['cat_id']=$cat_id;
}
else
{
$cat_id=$_SESSION['cat_id'];
}



if($cat_id!=''||$cat_id!=0)
{
$var.="&cat_id=$cat_id";
$cond.=" and  cat_id= $cat_id";
}
///////////////////////
if($order==0||$order=='')
{
 unset($_SESSION['order']);
}

if(isset($order)&&$order!=''&&$order!='0')
{
$_SESSION['order']=$order;
}
else
{
$order=$_SESSION['order'];
}
if($order!=''||$order!='0')
{
$ordr = " order by  $order asc ";
}

$ordr='order by `order` desc';
$date=$operation->getdata('alqudrah_products','*',$primary,$id,$cond,$ordr,$start,$limit);
$disp_page=$operation->paging('alqudrah_products',$primary,$id,$cond,$targetpage,$var,$limit);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="css/pagestyle.css" />

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
        <td align="center" valign="top"><? if(isset($_GET['msg'])){echo $_GET['msg'];} echo $msg; ?></td>
      </tr>
      <tr>
        <td align="left" valign="top">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="bdr">
        <? 
		$date1=$operation->getdata_1('alqudrah_categories','*','id',$cat_id,'','','','');
?>
        
		  <tr>
              <td width="21%" align="left" valign="middle" class="right_tile"  style="color:#FFFFFF">&nbsp;<?=$date1['name']?></td>
			   <td width="11%" align="center" valign="middle" class="right_tile" style="color:#FFFFFF"><a href="products_cat.php" style="text-decoration:none; color:#FFFFFF;">Back</a> </td>
			   <td colspan="4" align="left" valign="top" class="right_tile"s tyle="color:#FFFFFF">&nbsp;</td>
            </tr>
			 
			   <tr>
              <td colspan="4" align="left" valign="top" height="10" >&nbsp;</td>
			  </tr>
			  <form action="" method="post">
            <tr  >
              <td height="28" align="center" valign="middle" class="right_tile"  style="color:#FFFFFF" colspan="2">Machine Name </td>
			   <td width="12%" align="center" valign="middle" class="right_tile" style="color:#FFFFFF">&nbsp;ModelNo</td>
			     <td width="14%" align="center" valign="middle" class="right_tile" style="color:#FFFFFF">&nbsp;</td>
                 
			     <td width="12%" align="left" valign="middle" class="right_tile" style="color:#FFFFFF"><span class="right_tile" style="color:#FFFFFF">Edit</span></td>
			   <td width="30%" align="left" valign="middle" class="right_tile" style="color:#FFFFFF">Delete</td>
            </tr>
		<? if(count($date)>0){ foreach($date as $key=>$val){ extract($val);?>	
            <tr>
              <td align="left" valign="middle" height="30"  class="tdstyl_r" colspan="2"><div style="padding-left:5px;"><?=stripslashes($machine_name)?></div></td>
			  <td align="left" valign="top" class="tdstyl_r">&nbsp;<?=stripslashes($model_no)?></td>
			  <td align="center" valign="middle"  class="tdstyl_r">&nbsp;</td>
			 
				<td align="left" valign="top" class="tdstyl_r">&nbsp;<a href="edit_products.php?id=<?=$id?>&amp;catid=<?=$category_id?>"><img src="images/images.jpeg" height="19" border="0"/></a></td>
			  <td align="left" valign="top" class="tdstyl_r" >&nbsp;<a href="products.php?fn=del&amp;del_id=<?=$id?>"><img src="images/DeleteRed.png"  border="0"/></a></td>
            </tr>
			<? } }?>
			<tr>
              <td height="30" colspan="6" align="center" valign="top"  class="tdstyl_r"><?=$disp_page?></td>
			  </tr>
			 <tr>
              <td height="30" colspan="6" align="left" valign="top"  class="tdstyl_r">&nbsp;			     </td>
			  </tr>
			 <tr>
              <td height="30" colspan="6" align="center" valign="top"  class="">&nbsp;<?php /*?><table width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tr>
    <td colspan="4" class="tdstyl_r">&nbsp;&nbsp;&nbsp;&nbsp;<b>Assign Category/Subcategory/Related Collections To Products</b></td>
    </tr>
  <tr>
    <td width="16%" class="tdstyl_r">&nbsp;Select Category</td>
    <td width="20%" class="tdstyl_r">&nbsp;&nbsp;&nbsp;
			   
      <select name="category_id" onchange="getsubct(this.value)">
        <? 
	$ordr='order by id desc';
	$categories=$operation->getdata('bpgr_categories','*','','','',$ordr,'','');
	?>
        <option value="0"  selected="selected">Select One </option>
        <? foreach($categories as $key => $val ){ extract($val);?>
        <option value="<?=$id?>" >
          <?=$name?>
          </option>
        <? }?>
      </select></td>
    <td width="15%" class="tdstyl_r">&nbsp;Sub Category</td>
    <td width="49%" class="tdstyl_" id="subcat">&nbsp; 
</td>
  </tr>
   <tr>
    <td class="tdstyl_r">&nbsp;Related Collections</td>
    <td class="tdstyl_r">&nbsp;&nbsp;&nbsp;
	<select name="supplier_id" >
        <? 
	$ordr='order by id desc';
	$suppliers=$operation->getdata('bpgr_suppliers','*','','','',$ordr,'','');
	?>
        <option value="0"  selected="selected">Select One </option>
        <? foreach($suppliers as $key => $val ){ extract($val);?>
        <option value="<?=$id?>" >
          <?=$name?>
          </option>
        <? }?>
      </select></td>
    <td class="tdstyl_r"><input type="submit" name="Submit" value="Submit" /><input name="hid_subcatid" id="hid_subcatid" type="hidden" value="<?=$hid_subcatid1?>" /></td>
    <td class="tdstyl_">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="4" class="tdstyl_r">&nbsp;</td>
    </tr>
</table><?php */?></td>
			  </tr>
</form>       
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
<script>
function select_category(category_id)
{
//location.href='brand.php?page='+page+'&cat_id='+cat_id;
location.href='sub_category.php?category_id='+category_id;

}




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
xmlhttp.open("GET","get_subcategery2.php?cat_id="+str,true);
xmlhttp.send();
}

function get_subcatid(sub_cat_id)
{
  document.getElementById("hid_subcatid").value=sub_cat_id;
    document.getElementById("subcategory_id").value=sub_cat_id;
}

function getsubct1(str)
{
 if (str=="")
  {
  document.getElementById("subcat1").innerHTML="";
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
    document.getElementById("subcat1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","get_subcategery2.php?cat_id="+str,true);
xmlhttp.send();
}


</script>
</html>
