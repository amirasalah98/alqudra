<?php
//include('chek_login.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD Xhtml 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<link rel="stylesheet" type="text/css" href="css/css.css">
<style type="text/css">
<!--
.style1 {color: #F0F0F0}
-->
</style>
<script src="../admin/js/vali.js" type="text/javascript" language="javascript"></script>   
<script language="javascript">
function Validate(val)
	{
	
	  var un 		      = document.login.user.value;
	 	var pw     = document.login.pwd.value;
	
      var msg_username        = "";
	  var msg_password        = "";
	  var msg_result        = "";
	 if(pw == "")
	  {
	  	 msg_password = "Password required";
	  }
	 
	  if(un == "")
	  {
	  	 msg_username = "Username required";
	  }
	   if(password(un) == false || password(pw) ==false) 
		{
			msg_username="";
			msg_password="";
      		msg_result = "Invalid Username & Password";
		}
	 	
	 
	 
			
	
	  	  
	  if(msg_username == ""  && msg_password == "" && msg_result== "")
	  {
	  	return true;
	  } 
	  else
	  {
	    document.getElementById('username2').innerHTML 	        = msg_username;
		document.getElementById('password2').innerHTML 	        = msg_password;
		document.getElementById('result').innerHTML 	        = msg_result;
		return false;
	  }
	}
	
 function check(obj)
 {
 	val   = obj.value;
	nm    = obj.name;
	title = obj.title;
	divid = nm+"1";
	
	
	if(nm == 'email')
	{
	    if(obj.value != "")
		{
			 document.getElementById('username2').innerHTML ="";
		}
	}
	if(nm == 'password1')
	{
	    if(obj.value != "")
		{
			 document.getElementById('password2').innerHTML ="";
		}
	}
 }
</script>
</head>

<body>
<span class="style1"></span>
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" class="boxx">
  <tr>
    <td colspan="2" align="left" valign="middle" class="top"><?php include('top.php')?></td>
  </tr>
  <tr>
    <td height="12" colspan="2" align="left" valign="top"></td>
  </tr>
   <tr>
    <td width="20%" align="left" valign="top"><br />&nbsp;
    
    </td>
 
    
    <td width="80%" align="left" valign="top"><table width="99%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top" style="padding-left:130px;color:#000000;"> 
        <table cellpadding="0" cellspacing="0" width="482px" height="251px;">
        <tr><td class="l_left">&nbsp;</td>
        <td class="l_mdl" align="center" valign="middle" style="padding-top:30px;"> 
		<b>Admin Login</b><br />
         <form method="post" id='login' name='login' onsubmit="return Validate();return false;" action="login.php">
        <table width="293">
        <tr><td>Username</td><td><input type="text" name="user" width="150" />
		<div id="username2" style="font-size:10px; color:#FF0000;font-weight:bold;  "></div>
		</td></tr>
        <tr><td>Password</td><td><input type="password" name="pwd" width="150" />
		<div id="password2" style="font-size:10px; color:#FF0000;font-weight:bold; "></div>
		</td></tr>
        <tr><td>&nbsp;</td><td align="left"><input type="submit" name="login" value="Login" />
		
		</td></tr>
        </table>  <br />
        <table><tr><td style="color:#993300;">
		<div id="result" style="font-size:10px; color:#FF0000;font-weight:bold; float:left;"><?php echo $_REQUEST['er_log'] ?></div>
		</td></tr></table>      
        </form>
        </td><td class="l_right">&nbsp;
          
          </td>
        </tr>
        </table>
          </td>
      </tr>
      <tr>
        <td align="left" valign="top">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="middle" class="right_tile" style="border:#EEEEEE solid 1px;" >Powerd By <a href="#" style="color:#FFFFFF;text-decoration:none;">Webdesign GII</a></td>
  </tr>
</table>


</body>
</html>
