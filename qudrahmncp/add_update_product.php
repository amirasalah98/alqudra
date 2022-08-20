<?php
ini_set('max_execution_time', '600');

ob_start();
include('operation.php');
$operation =new operation();

$POST = array();
$value = array();

$key = array('maincategory_id','name','price','weight','info');
$xml = simplexml_load_file("xml/PxProductsOnXml.xml");
//$xml = simplexml_load_file("xml/myxml.xml");

foreach($xml->children() as $child)
  {
   $id=$child->id ;
   $name=$child->name;
   $price=$child->price ;
   $quantity=$child->quantity ;
   $description=$child->description ;
   
   $value=array($id ,$name,$price,$quantity,$description);
   $POST = array_combine($key, $value);
  
   $chk_products=$operation->getdata_1('alqudrah_products','id','maincategory_id',"'$id'");
   
  if(count($chk_products)>1)  
	{
  $operation->edit_products($POST);
	}
   else
   {
  $operation->add_products($POST);
   }
  }
header('location:admin.php?msg=suc');  
?> 