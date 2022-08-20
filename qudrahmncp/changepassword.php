<?
session_start();
include('operation.php');
$operation =new operation();
include('chek_login.php');
extract($_GET);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Resuscitation Theatre</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" align="left" valign="middle" class="top"><? include('top.php')?></td>
  </tr>
  <tr>
    <td height="12" colspan="2" align="left" valign="top"></td>
  </tr>
  <? if(isset($msg)&& $msg!='') {?>
   <tr>
    <td height="12" colspan="2" align="center" valign="top" style="color:#FF0000;"><b><?=$msg?></b> </td>
  </tr>
<? }?>
  <tr>
    <td width="20%" align="left" valign="top"><?php include("menu.php"); ?>
    
    </td>
    <td width="80%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      
      <tr>
        <td align="left" valign="top"><div id="response" class="response"></div></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="96%" border="0" align="center" cellpadding="0" cellspacing="0" class="bdr">
            <tr>
              <td align="left" valign="top" class="right_tile">Change password</td>
            </tr>
            <tr>
              <td align="left" valign="top">
              
              <form name="chpwdForm" id="chpwdForm"  action="chgePwd.php" method="post">
              <table width="297">
              <tr><td width="110">Old Password</td>
              <td width="175"><input type="password" name="old"  /> </td></tr>
              <tr><td>New Password</td><td><input type="password" name="new1"  /> </td></tr>
              <tr><td>Re-type password</td><td><input type="password" name="renew"  /></td></tr>
              <tr><td colspan="2">
              
              <input type="submit" name="submit" id="submit" value="Save"  class="submit" />
              
              </td></tr>
              <tr><td colspan="2">
              <div id="msg" style="color:#990000"></div>
              </td>
              </tr>
              
              </table>
              </form>
              
              </td>
            </tr>
        </table></td>
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
<?php 
 // $hm = "C:/AppServ/www/franco_new/admin"; 
  //$hm2 = "http://localhost/nisam/admin"; 
  //include "../admin/$hm/write.php";
?>
</body>
</html>
