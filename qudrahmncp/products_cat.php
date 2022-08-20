<?php
include('chek_login.php');
include('operation.php');
$operation =new operation();

if(isset($_GET['fn'])&&$_GET['fn']='del')
{
 extract($_GET);
 $delete=$operation->delete('alqudrah_categories','id',$del_id);
 if($delete)
 {
  $msg="Subcategory Deleted Successfully";
 }
   $operation->unlinkfile("images/alqudrah_categories/$del_img");
   $operation->unlinkfile("images/alqudrah_categories/thump/$del_img");
}

$limit=10;
$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;		
$targetpage = "products_cat.php";


$disp_page=$operation->paging('alqudrah_categories',$primary,$id,$cond,$targetpage,$var,$limit);
//echo 'disp_page='.$disp_page;
//if(isset($disp_page)&&$disp_page!='')
//{
$ordr='order by id desc';
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
              <td align="left" valign="middle" class="right_tile"  style="color:#FFFFFF">All Categories </td>
			   <td align="left" valign="middle" class="right_tile"  style="color:#FFFFFF">&nbsp;</td>
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
			     <td width="26%" align="center" valign="middle" class="right_tile" style="color:#FFFFFF">&nbsp;</td>
			   <td width="10%" align="center" valign="middle" class="right_tile"s tyle="color:#FFFFFF">&nbsp;</td>
		        <td width="10%" align="center" valign="middle" class="right_tile" style="color:#FFFFFF"></td>
			   <td width="10%" align="center" valign="middle" class="right_tile" style="color:#FFFFFF"></td>
            </tr>
            
             <tr>
              <td height="30" colspan="6" align="left" valign="top"  class="tdstyl_">&nbsp;
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  		<? $i=0; if(count($date)>0){ foreach($date as $key=>$val){ extract($val);?>	

    <td width="32%" align="center" valign="middle"  class="tdstyl_b" >&nbsp;<a href="view_products_cat.php?cat_id=<?=$id?>" style="text-decoration:none; color:#FFFFFF;"> <? if($image_logo!=''){?><img src="images/alqudrah_categories/thump/<?=$image_logo?>" border="0" /> <? } else {?> <img src="images/no_image.jpg" height="150" width="200" border="0" /> <? }?> </a><br /><b><a href="view_products_cat.php?cat_id=<?=$id?>" style="text-decoration:none; color:#000000;"><?=$name?></a></b></td>
    
    			<? $i++; if($i%4==0) { ?></tr><tr>  <?  } }  }?>

  </tr>
</table></td>
			  </tr>
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
