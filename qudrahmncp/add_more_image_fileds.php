<?
$cnt3=$_GET['adv_id1'];
$cnt3++; 
//echo  $cnt;
?>
<td colspan="6" align="left" valign="top" height="10" >
			  
			  
			

<table width="100%" border="0" cellpadding="0" cellspacing="0">
 <? for($im=1;$im<$cnt3;$im++) {?>
  <tr>
    <td width="27%" class="tdstyl_r">&nbsp;</td>
    <td width="47%" class="tdstyl_r">&nbsp;&nbsp;
        <label>
        <input type="file" name="images[]" />
        </label>      </td>
    <td width="26%"  class="tdstyl_r">	</td>
  </tr>
 <? }?> 
  <tr>
    <td class="tdstyl_b">&nbsp;</td>
    <td class="tdstyl_b"><label></label></td>
    <td class="tdstyl_b"><input type="button" name="" value="Add More Fields" onclick="add_more_image_fields(<?=$im?>)" /></td>
  </tr>
</table>

</td>