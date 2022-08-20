<?
//include('chek_login.php');
include('include/basicoperation.php');
class operation extends basicoperation
{

//==============================================================================================================================================================================
	
		function add_categry($POST)
		{
		  $tbl_name='alqudrah_categories';
		  extract($POST);
		 
		 /* $icon=$FILE['icon']['name'];
		 // echo '===icon==='.$icon;
		  //exit;
		  $icon=rand(1,999999999).$icon;
		  $source=$FILE['icon']['tmp_name'];
		 
		   
		  $fields=array('category_order','name','image_logo');
		  $ins_value=array("$category_order","'$name'","'$icon'");
		  
		  $FILES_type = $FILE['icon']['type'];
		  $FILES_size = $FILE['icon']['size'];
		  $folder=$tbl_name;
		  $filename= $icon;
		  $this->upload_image($folder,$source,$filename);
		  $this->image_resize($folder,$FILES_type,$icon,$FILES_size,$source,200);
		  */
		  $name = mysql_real_escape_string($name);
		  $name=$this->strip_html_tags($name);	   
		  $fields=array('name');
		  $ins_value=array("'$name'");
		  return $this->add_genaral($tbl_name,$fields,$ins_value);
		}
		
		function edit_categry($POST,$FILE)
		{
		  $tbl_name='alqudrah_categories';
		  extract($POST);
		 
		/* $icon=$FILE['icon']['name'];
		  if($icon!='')
		  {
		  $icon=rand(1,999999999).$icon;
		  $source=$FILE['icon']['tmp_name'];
		  $FILES_type = $FILE['icon']['type'];
		  $FILES_size = $FILE['icon']['size'];
		  $folder=$tbl_name;
		  $filename= $icon;
		  $this->upload_image($folder,$source,$filename);
		  $this->image_resize($folder,$FILES_type,$icon,$FILES_size,$source,200);
		  $this->unlinkfile("images/$folder/$edit_image");
		  $this->unlinkfile("images/$folder/thump/$edit_image");
		  }
		  else
		  {
		   $icon=$edit_image;
		  }*/
		  
		  $name = mysql_real_escape_string($name);
		  $name=$this->strip_html_tags($name);
		  $fields=array('name');
		  $ins_value=array("'$name'");
		  return $this->edit_genaral($tbl_name,$fields,$ins_value,'id',$edit_id);
		  
		}
	function add_subcategry($POST)
		{
		  $tbl_name='alqudrah_subcategories';
		  extract($POST);
		  $category_id = mysql_real_escape_string($category_id);
		  $category_id=$this->strip_html_tags($category_id);
		  $name = mysql_real_escape_string($name);
		  $name=$this->strip_html_tags($name);
		  $fields=array('cat_id','name');
		  $ins_value=array("'$category_id'","'$name'");
		  return $this->add_genaral($tbl_name,$fields,$ins_value);
		}
		

function edit_subcategry($POST)
	{
	 $tbl_name='alqudrah_subcategories';
	 extract($POST);
	 $category_id = mysql_real_escape_string($category_id);
	 $category_id=$this->strip_html_tags($category_id);
	 $name = mysql_real_escape_string($name);
	 $name=$this->strip_html_tags($name);
	 $fields=array('cat_id','name');
	 $ins_value=array("'$category_id'","'$name'");
	 return $this->edit_genaral($tbl_name,$fields,$ins_value,'id',$edit_id);
		  
	}
function add_products($POST,$FILE)
		{
		  $tbl_name='alqudrah_products';
		  extract($POST);
		  $icon=$FILE['icon']['name'];
		 
		  $icon=rand(1,999999999).$icon;
		  $source=$FILE['icon']['tmp_name'];
		  $FILES_type = $FILE['icon']['type'];
		  $FILES_size = $FILE['icon']['size'];
		  $folder=$tbl_name;
		  $filename= $icon;
		  $this->upload_image("../qudrahimg/$folder",$source,$filename);
		  $this->image_resize("../qudrahimg/$folder/thump",$FILES_type,$icon,$FILES_size,$source,197);
		  $details1 = addslashes($details);
		  
		  $cat_id = mysql_real_escape_string($cat_id);
   	      $cat_id=$this->strip_html_tags($cat_id);
	      $name = mysql_real_escape_string($name);
	      $name=$this->strip_html_tags($name);
		  $scat_id = mysql_real_escape_string($scat_id);
		  $scat_id=$this->strip_html_tags($scat_id);
		  $m_name = mysql_real_escape_string($m_name);
		  $m_name=$this->strip_html_tags($m_name);
		  $type = mysql_real_escape_string($type);
		  $type=$this->strip_html_tags($type);
		  $serial = mysql_real_escape_string($serial);
		  $serial=$this->strip_html_tags($serial);
		  $year = mysql_real_escape_string($year);
		  $year=$this->strip_html_tags($year);
		  $details1 = mysql_real_escape_string($details1);
		  $details1=$this->strip_html_tags($details1);
		  $itemid = mysql_real_escape_string($itemid);
		  $itemid=$this->strip_html_tags($itemid);
		 
		  $fields=array('`cat_id`','`sub_id`','`name`','`manufacturer`','`type`','`serial`','`year`','`image`','`details`','`itemid`');
		  $ins_value=array("$cat_id","'$scat_id'","'$name'","'$m_name'","'$type'","'$serial'","'$year'","'$icon'","'$details1'","'$itemid'");
		  
		    return $this->add_genaral($tbl_name,$fields,$ins_value);
		  /*$prod_id=$this->get_last_id();
		  
		    $tbl_name='alqudrah_images';
		   
		   $images_name		= $FILE['images']['name'];
		   $source			= $FILE['images']['tmp_name'];
           $FILES_type		= $FILE['images']['type'];
		   $FILES_size 		= $FILE['images']['size']; 
		 
		   $folder=$tbl_name;
		   
		   $count=count($images_name);
		   for($i=0;$i<$count;$i++)
		  {
		  $p_images_name		  = 	    rand(1,999999999).$images_name[$i];
		  $p_source		 		  =	 		$source[$i];	
		  $p_FILES_type	 		  = 	 	$FILES_type[$i];
		  $p_FILES_size			  =	 		$FILES_size[$i];
		 
		  $this->upload_image($folder,$p_source,$p_images_name);
		  $this->image_resize($folder,$p_FILES_type,$p_images_name,$p_FILES_size,$p_source,'110');
		 
		  $fields=array('prod_id','prod_image');
		  $ins_value=array("'$prod_id'","'$p_images_name'");
		  $this->add_genaral($tbl_name,$fields,$ins_value);	
		  }	
if($prod_id){ return true;}
 */
		}		
		
		
		function edit_products($POST,$FILE)
		{
		  $tbl_name='alqudrah_products';
		  extract($POST);
		$icon=$FILE['icon']['name'];
		  if($icon!='')
		  {
		  $icon=rand(1,999999999).$icon;
		  $source=$FILE['icon']['tmp_name'];
		  $FILES_type = $FILE['icon']['type'];
		  $FILES_size = $FILE['icon']['size'];
		  $folder=$tbl_name;
		  $filename= $icon;
		  $this->upload_image("../qudrahimg/$folder",$source,$filename);
		  $this->image_resize("../qudrahimg/$folder/thump",$FILES_type,$icon,$FILES_size,$source,197);
		  $this->unlinkfile("../qudrahimg/$folder/$edit_image");
		  $this->unlinkfile("../qudrahimg/$folder/thump/$edit_image");
		  }
		  else
		  {
		   $icon=$edit_image;
		  }
	
	
	
	$details1 = addslashes($details);
	      $cat_id = mysql_real_escape_string($cat_id);
   	      $cat_id=$this->strip_html_tags($cat_id);
	      $name = mysql_real_escape_string($name);
	      $name=$this->strip_html_tags($name);
		  $scat_id = mysql_real_escape_string($scat_id);
		  $scat_id=$this->strip_html_tags($scat_id);
		  $m_name = mysql_real_escape_string($m_name);
		  $m_name=$this->strip_html_tags($m_name);
		  $type = mysql_real_escape_string($type);
		  $type=$this->strip_html_tags($type);
		  $serial = mysql_real_escape_string($serial);
		  $serial=$this->strip_html_tags($serial);
		  $year = mysql_real_escape_string($year);
		  $year=$this->strip_html_tags($year);
		  $details1 = mysql_real_escape_string($details1);
		  $details1=$this->strip_html_tags($details1);
		  $itemid = mysql_real_escape_string($itemid);
		  $itemid=$this->strip_html_tags($itemid);
		  
		$fields=array('`cat_id`','`sub_id`','`name`','`manufacturer`','`type`','`serial`','`year`','`image`','`details`','`itemid`');
		  $ins_value=array("$cat_id","'$scat_id'","'$name'","'$m_name'","'$type'","'$serial'","'$year'","'$icon'","'$details1'","'$itemid'");
		   return  $this->edit_genaral($tbl_name,$fields,$ins_value,'id',$edit_id);
		  
		  
		   }
//==============================================================================================================================================================================

	  
   }

  
 
  

?>