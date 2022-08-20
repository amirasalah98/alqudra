<?
include('qudrahmncp/operation.php');
$operation =new operation();

$sub_cat = $_GET['sub_cat'];

?>
<table width="755" style="border-collapse: collapse" bordercolor="#FFFFFF" cellpadding="5" cellspacing="0" border="1" class="fontTable" id="tblfirst">
  <tr> 
      
      <td width="755" bgcolor="#666666" colspan="7"><font color="#FFFFFF"><b>
      Category:  </b></font></td>
      
  </tr>
  
  
  <tr> 
      
      <td width="153" bgcolor="#999999">Manufacturer</td>
      
      <td width="305" bgcolor="#999999"> Product</td>
      
      <td width="305" bgcolor="#999999"> Type</td>
      
      <td width="155" bgcolor="#999999"> Year</td>
      
      <td width="227" bgcolor="#999999"> Serial</td>
      <td width="100" bgcolor="#999999">
      </td>
      <td width="64" bgcolor="#999999">
      View</td>
  </tr>
   <? $about_us_data=$operation->getdata('alqudrah_products','*','sub_id',"'$sub_cat'",'' ); 
			 foreach ($about_us_data as $val ) { @extract($val);?>
  <tr> 
     <form method="post" action="EditItem.asp" target="_self">
      
      <input name="ID" type="hidden" value="<?=$id?>">
      
      <td width="153" bgcolor="#CCCCCC"><?=stripslashes($manufacturer)?></td>
      
      <input name="ProductName" type="hidden" value="<%=Make%>">
      
      <td width="305" bgcolor="#CCCCCC"><?=stripslashes($name)?></td>
      
      <td width="305" bgcolor="#CCCCCC"><?=stripslashes($type)?></td>
      
      <td width="155" bgcolor="#CCCCCC"> <div align="center"><?=stripslashes($year)?></div></td>
      
      <input name="productSellingPrice" type="hidden" value="<?=stripslashes($year)?>">
      
      <td width="227" bgcolor="#CCCCCC"> <div align="center"><?=stripslashes($serial)?></div></td>
      <input name="productAvailableQty" type="hidden" value="<?=stripslashes($serial)?>">
      <td width="100" bgcolor="#CCCCCC">
      </td>
      <td width="64" bgcolor="#CCCCCC">
      <p align="center"><a href="ViewInDetail_cust.php?ID=<?=$id?>&cat_id=<?=$cat_id?>&sub_id=<?=$sub_id?>"><img border="0" src="photo.jpg"></a>
      <a href="ViewInDetail_cust.php?ID=<?=$id?>&cat_id=<?=$cat_id?>&sub_id=<?=$sub_id?>">Details&gt;&gt;</a>
      </td>
    </form>
  </tr><? }?>
</table>