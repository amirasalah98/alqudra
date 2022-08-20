&nbsp;&nbsp;<select name="scat_id"  >
<option value="" selected="selected">Select One</option>

<?
include('operation.php');
$operation =new operation();
$cat_id=$_GET["cat_id"];
$sub_catid=$_GET["sub_catid"];

$ordr='order by id desc';
$subcategories=$operation->getdata('alqudrah_subcategories','*','cat_id',"'$cat_id'",$cond,$ordr);
foreach($subcategories as $val => $key)
{
extract($key);
?>
<option value="<?=$id?>" <? if($id==$sub_catid){ echo 'selected="selected"';} ?>  ><?=$name?></option>
<?
}

?>
</select>