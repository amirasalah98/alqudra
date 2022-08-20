<?
include('chek_login.php');
ob_start();
include('include/basicoperation.php');
$data=new basicoperation();
	$check = '';
	$msg='';
	$return_arr = array();
	$username = $_SESSION['username'] ;
	//echo  '$username =='.$username ;exit;
	if($_POST['old']=="")
	{
		$check='invalid';
		$msg .='Please Enter your old Password<br/>';
	}
	
	if($_POST['new1']=="" || $_POST['renew']=="")
	{
		$check='invalid';
		$msg .='Please enter new password<br/>';
	}
	
	if($_POST['new1'] != $_POST['renew'])
	{
		$check='invalid';
		$msg .='Both password should be same<br/>';
	}
	
	if($check == '')
	{
			$tbl_name			=	'alqudrah_admins';
			$userid				=	$user;
			$pwd				=   $_POST['old'];	
			$login=$data->adminlogin($tbl_name,$username,$pwd);
			
		if($login==1)
		{
			$sql="UPDATE alqudrah_admins SET password = '".$_POST['new1']."' WHERE username = '".$username	."' AND password  = '".$_POST['old']."'";
			//die($sql);
			$row=mysql_query($sql);
			$msg .='Your Password has been changed, Please loging with new password next time';
			header('location:changepassword.php?msg='.$msg);
		}
		else
		{
			$check='invalid';
			$msg .='NOT a valid password';
			header('location:changepassword.php?msg='.$msg);

		}
	
		
	}
	else
	{
	 header('location:changepassword.php?msg='.$msg);

	}
	//$check = 'invalid';
	
	

?>