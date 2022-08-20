<?php
//include('config.php');
include('page.php');

	class basicoperation extends page
	{ 
		function getdata($tbl_name,$fields,$primary='',$id='',$cond='',$ordr='',$start='',$limit='')
		 {
		 
		 $where=' where 1 ';
			if(isset($primary) && isset($id) && $primary!='')
			{
			  $where.= " and  $primary=$id ";
			}
			
			if(isset($cond)&& $cond!='')
			{
			  $where.="   $cond";
			}
			
			if(isset($ordr)&& $ordr!='')
			{
			 $order=$ordr;
			}
			 else
			 {
			 $order='';
			 }
			 if($start!=''|| $limit!='')
			 {
			  $LIMIT1=" LIMIT $start, $limit";
			 }
			 else
			 {
			  $LIMIT1="";
			 }
			 
		  $sql = "SELECT  $fields FROM $tbl_name  $where $order $LIMIT1";
		//echo   $sql."<br />";
		  //exit;
		//print($sql);
		  return	$this->readvalues($sql);
		 }
		 
		
		 function getdata_1($tbl_name,$fields,$primary='',$id='',$cond='',$ordr='')
		 {
		 $where=' where 1 ';
			if(isset($primary) && isset($id)&& $id!='')
			{
			  $where.= " and  $primary=$id ";
			}
			
			if(isset($cond)&& $cond!='')
			{
			  $where.=" and  $cond";
			}
			if(isset($ordr)&& $ordr!='')
			{
			 $order=$ordr;
			}
			 else
			 {
			 $order='';
			 }
			
		  $sql = "SELECT  $fields FROM $tbl_name  $where $order LIMIT 1";
		//echo   $sql."<br />";
		  //exit;
		  //print($sql);
		  return	$this->readvalue($sql);
		 }
		 
		 
		  function count_1($tbl_name,$fields,$primary='',$id='',$cond='')
		 {
		 $where=' where 1 ';
			if(isset($primary) && isset($id)&& $id!='')
			{
			  $where.= " and  $primary=$id ";
			}
			
			if(isset($cond)&& $cond!='')
			{
			  $where.=" and  $cond";
			}
			
			
			
		  $sql = "SELECT  count($fields) as count FROM $tbl_name  $where $order LIMIT 1";
		//echo   $sql."<br />";
		  //exit;
		  return	$this->readvalue($sql);
		 }
		 
		 
		 function  adminlogin($tbl_name,$username,$pwd)
		 {
		 $username= mysql_real_escape_string(strip_tags($username));
		 $pwd= mysql_real_escape_string(strip_tags($pwd));
		  $query="SELECT * FROM  $tbl_name  WHERE username='$username' AND 	password='$pwd'";
			//echo 'row=='.$query;
			//exit;
			$row=$this->query($query);
			return $this->no_rows($row);
		 }
		 function  login_details($tbl_name,$username,$pwd)
		 {
		  $query="SELECT * FROM  $tbl_name  WHERE username='$username' AND 	password='$pwd'";
			//echo 'row=='.$query;
			//exit;
			$row=$this->readvalue($query);
			return $row;
		 }
		 
		 function  add_genaral($tbl_name,$fields,$ins_value)
		 {
			//print_r($fields);
			$sql="INSERT INTO $tbl_name (".implode(',',$fields).") VALUES (".implode(',',$ins_value).")";
			//echo  $sql;
			//exit;
			return $this->query($sql);
			
		 }
		 
		  function  edit_genaral($tbl_name,$fields,$ins_value,$primary,$edit_id)
		 {
			$lp=count($fields);
			$last=$lp-1;
			//echo  'lp==='.$lp.$last;exit;
				for($i=0;$i<$lp;$i++)
				{
					$update.= "$fields[$i]=$ins_value[$i]";
					if($last!=$i)
					{
					//echo '$lp=='.$lp.'$last='.$last."<br />";
					$update.=',';
					}
				}
			//print_r($fields);
			$sql="UPDATE  $tbl_name SET $update  WHERE $primary=$edit_id";
			//echo  $sql."<br />";
			//print($sql);
			return $this->query($sql);
			
		 }
		 
		function upload_image($folder,$source,$filename)
		{
		$folder=$folder;
		$extlimit = "yes";
		
		$limitedext = array(".gif",".jpg",".png",".jpeg",".bmp",".doc",".docx",".pdf",".txt");
		$ext = strrchr($filename,'.');
			
			$ext = strtolower($ext);
				if (($extlimit == "yes") && (!in_array($ext,$limitedext)))
				 {
				echo "Wrong file extension.  <br>--<a href=\"$_SERVER[PHP_SELF]\">back</a>";
				exit();
				}	
		 if(!(is_dir($folder)))
			{
			mkdir($folder);
			copy($source,"$folder/$filename");
			}
			else
			{
			copy($source,"$folder/$filename");
			}
			chmod("$folder/$filename",0644);  
		}
  	
function image_resize($folder,$FILES_type,$FILES_name,$FILES_size,$FILES_tmp_name,$rewidth)
	     {
			 $path_thumbs = "$folder";		
				
				 if(!(is_dir($path_thumbs)))
				 {
					mkdir($path_thumbs);
				 }
				 $change="";
$abc="";

 define ("MAX_SIZE","900");

 $errors=0;
  $image =$FILES_name;
 /*if($_SERVER["REQUEST_METHOD"] == "POST")
 {
 	$image =$_FILES["file"]["name"];
	$uploadedfile = $_FILES['file']['tmp_name'];
     
 */
 	if ($image) 
 	{
 	

 		$filename = $FILES_name;
 	
  		//$extension = getExtension($filename);
 		//$extension = strtolower($extension);
		$extlimit = "yes";
		$limitedext = array(".gif",".jpg",".png",".jpeg",".bmp");
		$extension = strrchr($filename,'.');
			
			$extension = strtolower($extension);
				if (($extlimit == "yes") && (!in_array($extension,$limitedext)))
				 {
				echo "Wrong file extension.  <br>--<a href=\"$_SERVER[PHP_SELF]\">back</a>";
				exit();
				}else
 		{

 $size=$FILES_size;

if ($size > MAX_SIZE*1024)
{
	$change='<div class="msgdiv">You have exceeded the size limit!</div> ';
	$errors=1;
}
if($extension==".jpg" || $extension==".jpeg" )
{
$uploadedfile = $FILES_tmp_name;
$src = imagecreatefromjpeg($uploadedfile);

}
else if($extension==".png")
{
$uploadedfile = $FILES_tmp_name;
$src = imagecreatefrompng($uploadedfile);

}
else 
{
$src = imagecreatefromgif($uploadedfile);
}


list($width,$height)=getimagesize($uploadedfile);


/*$newwidth=100;
$newheight=($height/$width)*$newwidth;
$tmp=imagecreatetruecolor($newwidth,$newheight);
*/

$newwidth1=$rewidth;
$newheight1=($height/$width)*$newwidth1;
$tmp1=imagecreatetruecolor($newwidth1,$newheight1);

/*imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
*/
imagecopyresampled($tmp1,$src,0,0,0,0,$newwidth1,$newheight1,$width,$height);


$filename1 = "$path_thumbs/". $FILES_name;

imagejpeg($tmp1,$filename1,100);
//echo $filename;
//exit;
imagedestroy($src);
imagedestroy($tmp1);
}}
chmod("$path_thumbs/$filename1",0777); 

 }
		
		function delete($table,$primary,$id)
		{
		 $sql="delete from $table where $primary=$id";
		 //echo $sql;
		// exit;
		
		 return $this->query($sql);
		}
		
		function delete_con($table,$primary,$id,$con='')
		{
		
		
		 $sql="delete from $table where $primary=$id $con";
		 //echo $sql;
		// exit;
		 return $this->query($sql);
		}
		
		
		
		function unlinkfile($file_path)
		{
		  if(file_exists($file_path))
		  {
		  //  echo $file_path;
		   @unlink($file_path);
		  }
		}
	function imageResize($width, $height, $target) {

//takes the larger size of the width and height and applies the
if($width!=0 && $width!='' && $height!=0 && $height!='')
{
if ($width > $height) {
$percentage = ($target / $width);
} else {
$percentage = ($target / $height);
}
}
//gets the new value and applies the percentage, then rounds the value
$width = round($width * $percentage);
$height = round($height * $percentage);



return "width=\"$width\" height=\"$height\"";
}


//////////prevent sql injection////
 function strip_html_tags( $text )
{
$text = preg_replace(
array(
// Remove invisible content
'@<head[^>]*?>.*?</head>@siu',
'@<script[^>]*?.*?</script>@siu',
'@<object[^>]*?.*?</object>@siu',
'@<embed[^>]*?.*?</embed>@siu',
'@<applet[^>]*?.*?</applet>@siu',
'@<noframes[^>]*?.*?</noframes>@siu',
'@<noscript[^>]*?.*?</noscript>@siu',
'@<noembed[^>]*?.*?</noembed>@siu',
// Add line breaks before and after blocks
'@</?((address)|(blockquote)|(center)|(del))@iu',
'@</?((div)|(ins)|(isindex)|(pre))@iu',
'@</?((dir)|(dl)|(dt)|(dd)|(menu))@iu',

'@</?((form)|(button)|(fieldset)|(legend)|(input))@iu',
'@</?((label)|(select)|(optgroup)|(option)|(textarea))@iu',
'@</?((frameset)|(frame)|(iframe))@iu',
),
array(
' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ',
"\n\$0", "\n\$0", "\n\$0", "\n\$0", "\n\$0",
"\n\$0", "\n\$0",
),
$text );
return strip_tags($text,"<p><div><ul><li><a><table><th><tr><td>");
}

	
} 
 ?>
