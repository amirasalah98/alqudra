<?php
include('chek_login.php');
include('operation.php');
$operation =new operation();

if(isset($_GET['fn'])&&$_GET['fn']='del')
{
 extract($_GET);
  $sp_services=$operation->getdata('alqudrah_products','*','cat_id',$del_id,$cond);
 if(count($sp_services)>0){ foreach($sp_services as $sp_servicesk=> $sp_servicesv)
   {

  $operation->unlinkfile("../qudrahimg/alqudrah_products/".$sp_servicesv['image']);
  $operation->unlinkfile("../qudrahimg/alqudrah_products/thump/".$sp_servicesv['image']);
   }
   }
 $deletef=$operation->delete('alqudrah_products','cat_id',$del_id);
 $deletef=$operation->delete('alqudrah_subcategories','cat_id',$del_id);

 
 $delete=$operation->delete('alqudrah_categories','id',$del_id);
 if($delete)
 {
  $msg="category Deleted Successfully";
 }
  // $operation->unlinkfile("images/alqudrah_categories/$del_img");
   //$operation->unlinkfile("images/alqudrah_categories/thump/$del_img");
}

$limit=10;
$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;		
$targetpage = "category.php";


$disp_page=$operation->paging('alqudrah_categories',$primary,$id,$cond,$targetpage,$var,$limit);
//echo 'disp_page='.$disp_page;
//if(isset($disp_page)&&$disp_page!='')
//{
//$ordr='order by `category_order` desc';
$date=$operation->getdata('alqudrah_categories','*',$primary,$id,$cond,$ordr,$start,$limit);
//echo 'start=='.$start;
//echo 'limit=='.$limit;
//}

//print_r($date);
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
    <td width="20%" align="left" valign="top"><br />
    <?php include("menu.php"); ?></td>
    <td width="80%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">

      <tr>
        <td align="center" valign="top"><? if(isset($_GET['msg'])){echo $_GET['msg'];} echo $msg; ?></td>
      </tr>
      <tr>
        <td align="left" valign="top">
		<table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" class="bdr">
		  <tr>
              <td align="left" valign="middle" class="right_tile"  style="color:#FFFFFF">Manage Category </td>
			   <td align="left" valign="middle" class="right_tile"  style="color:#FFFFFF"><a href="add_category.php" style="text-decoration:none; color:#FFFFFF;">Add Category</a></td>
			   <td width="26%" align="center" valign="middle" class="right_tile" style="color:#FFFFFF">&nbsp;</td>
			   <td colspan="2" align="center" valign="middle" class="right_tile"s tyle="color:#FFFFFF">&nbsp;</td>
		        <td width="10%" align="center" valign="middle" class="right_tile" style="color:#FFFFFF"></td>
            </tr>
			 <tr>
              <td colspan="6" align="left" valign="top" height="10" >&nbsp;</td>
			  </tr>
            <tr  >
              <td width="21%" align="center" valign="middle" class="right_tile"  style="color:#FFFFFF">Category Name </td>
			   <td width="23%" align="center" valign="middle" class="right_tile" style="color:#FFFFFF">&nbsp;</td>
			     <td width="26%" align="center" valign="middle" class="right_tile" style="color:#FFFFFF"> Edit </td>
			   <td width="10%" align="center" valign="middle" class="right_tile"s tyle="color:#FFFFFF">Delete</td>
			     <td width="10%" align="center" valign="middle" class="right_tile" style="color:#FFFFFF"></td>
			   <td width="10%" align="center" valign="middle" class="right_tile" style="color:#FFFFFF"></td>
            </tr>
		<? if(count($date)>0){ foreach($date as $key=>$val){ extract($val);?>	
            <tr>
              <td align="left" valign="top" height="30"  class="tdstyl_r"><?=stripslashes($name)?></td>
			  <td align="left" valign="top" class="tdstyl_r">&nbsp;</td>
			  <td align="center" valign="middle"  class="tdstyl_r"><a href="edit_category.php?id=<?=$id?>&amp;catid=<?=$category_id?>"><img src="images/images.jpeg" border="0"/></a></td>
			  <td align="center" valign="middle" class="tdstyl_r"><a href="category.php?fn=del&amp;del_id=<?=$id?>&amp;del_img=<?=$image_logo?>" onclick="return confirm('Are you sure you want to delete?')"><img src="images/DeleteRed.png"  border="0"/></a></td>
				<td align="left" valign="top" class="tdstyl_r">&nbsp;</td>
			  <td align="left" valign="top" class="tdstyl_" >&nbsp;</td>
            </tr>
			<? } }?>
			 <tr>
              <td height="30" colspan="6" align="center" valign="top"  class="tdstyl_r"><?=$disp_page?></td>
			  </tr>
        </table>		</td>
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
</html>
