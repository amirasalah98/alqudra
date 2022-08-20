<?php
session_start();
ob_start();
include('include/basicoperation.php');
$data=new basicoperation();
$msg="";
//login process

if(isset($_POST['login']))
{
	$username	=	$_POST['user'];
	$pwd		=	$_POST['pwd'];
	$tbl_name	=	'alqudrah_admins';
	$login=$data->adminlogin($tbl_name,$username,$pwd);
	$login_details=$data->login_details($tbl_name,$username,$pwd);
//echo print_r($login_details); echo 'adminID=='.$login_details['id'];echo 'username==='.$login_details['username'];exit;
	if($login==1)
	{
		$_SESSION['ad_id']=$login_details['id'];
		$_SESSION['username']=$login_details['username'];
		header("Location:admin.php");
	}
	else
	{
		//$msg = "Invalid Username or Password!";
		header("Location:index.php?er_log=Invalid Username Or Password");
	}
}
?>