<?
session_start();
$_SESSION = array();

include("captcha/simple-php-captcha.php");
$_SESSION['captcha'] = captcha();

include('qudrahmncp/operation.php');
$operation =new operation();

if(isset($_POST) && $_POST['CompanyName']!='')
{
extract($_POST);
//$to       = 'nisam@webcompanyindia.com';
	$to       = 'mail@alqudrah-machinery.com';
	$subject  = "Feed Back Al-Qudrah Machines & Equipments";

if($_GET['ID']!='')
{
$subject = "Enquiry about Item ID : ".$ItemID."(".stripslashes($pname).")";
}

$mail_user="<table width='80%' border='0'>
 <tr>
    <td colspan='3'>Feed Back Al-Qudrah Machines & Equipments   </td>
  </tr>
  <tr>
    <td width='30%'>&nbsp;<b>Company Name</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".stripslashes(htmlentities($CompanyName))."</td>
  </tr>
  <tr>
    <td width='30%'>&nbsp;<b>Contact Person</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".stripslashes(htmlentities($ContactPerson))."</td>
  </tr>
  <tr>
    <td width='30%'>&nbsp;<b> Telephone</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".stripslashes(htmlentities($Telephone))."</td>
  </tr>
 <tr>
    <td width='30%'>&nbsp;<b> Fax</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".stripslashes(htmlentities($Fax))."</td>
  </tr>
 <tr>
    <td width='30%'>&nbsp;<b>Email</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".stripslashes(htmlentities($Email))."</td>
  </tr>
 <tr>
    <td width='30%'>&nbsp;<b>City</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".stripslashes(htmlentities($City))."</td>
  </tr>
 <tr>
    <td width='30%'>&nbsp;<b>Country</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".stripslashes(htmlentities($Country))."</td>
  </tr>
 <tr>
    <td width='30%'>&nbsp;<b> Enquiry</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".stripslashes(htmlentities($Enquiry))."</td>
  </tr>
 <tr>
    <td width='30%'>&nbsp;<b> Subject</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".stripslashes(htmlentities($Subject))."</td>
  </tr>
  <tr>
    <td width='30%'>&nbsp;<b> Message</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".stripslashes(htmlentities($Message))."</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>";
//echo $subject; exit;
	$headers   = "MIME-Version: 1.0\n";
	$headers  .= "Content-type: text/html; charset=iso-8859-1\n";
	$headers  .= "X-Priority: 3\n";
	$headers  .= "X-MSMail-Priority: Normal\n";
	$headers  .= "X-Mailer: php\n";
	$headers  .= "From: \"{$CompanyName}\" <{$Email}>\n";
	$headers  .= "Return-Path: {$Email}\n";
	$headers  .= "Return-Receipt-To: {$Email}\n" ;
	if(mail($to,$subject,$mail_user,$headers))
	{
		$msg="<span style='color:red;'>Thank You,Your details has been sent successfully!,<br>We will get in touch with you soon.</span><br /><br />";
	}
	else
	{
	  $msg= "<span style='color:#FF0000'>Sorry,Unexpected error,Please try again</span><br /><br />";
	}
}
?>

<? 
		   	$pro=$operation->getdata_1('alqudrah_products','*','id',$_GET['ID'],'' ); 
			 // @extract($pro);
		   ?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">


<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Contact Al Qudrah Used Bldg. Machines &amp; Equipments Trading</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="style.css">
<script language="JavaScript" src="qudrahmncp/js/gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>

</head>

<body class="bgServices">
<header class="first-header">
    <nav class="container">
        <ul class="row ">
            <li class="col-md-2 d-flex justify-content-center"><a href="index.php">Home</a></li>
            <li class="col-md-2 d-flex justify-content-center"><a href="Building_equipments_Services.htm">Services</a></li>
            <li class="col-md-2 d-flex justify-content-center"><a href="Construction_Equipments_Products.php">Products</a></li>
            <li class="col-md-2 d-flex justify-content-center"><a href="Construction_Equipments_Contact.php">Contact</a></li>
            <li class="col-md-2 d-flex justify-content-center"><a href="Construction_Equipments_RoutMap.htm">Location</a></li>
            <li class="col-md-2 d-flex justify-content-center aboutUs"><a href="about-us.html">About us</a></li>
        </ul>
    </nav>
</header>
<header class="second-header">
<div class="container ">
    <div class="row ">
        <div class="col-md-4 logo d-flex justify-content-start "><img src="newImages/logo.png" alt="" width="100"></div>
        <div class="col-md-4 d-flex align-items-center row " style="text-align: center;height: 100px;">
          <div class="col-md-12"> <b style="color: #191957;" > Tel/Whatsapp -</b><span> 971561888019 </span></br></div>
          <div class="col-md-12"><b style="color: #191957;"> Email -</b><span> accountsalqudrah@gmail.com</span></div>
        </div>
        <div class="col-md-4 d-flex justify-content-end align-items-center " style="height: 100px;"><b style="color: #191957;">Sharjah </br>( UAE )</b></div>
    </div>
</div>
</header>
<section class="bg-sec" style="background-image:url(newImages/background1.png);background-repeat: no-repeat;background-size: cover;">
<div class="bg-sec-color ">
    <div class="container bg-sec-details p-5"  >
   <div class="row align-items-center d-flex align-items-start flex-column" style="height: 200px;">
      <h1 class=" d-flex justify-content-end col" >Welcome To Alqudrah</h1>
      <p><span  class=" d-flex justify-content-end col" >For New & Used Building Machines & Equipment.</span></p>
      <div class=" d-flex justify-content-end " ><input type="button" value="Read More"></div>
    </div>
    </div>
</div>
</section>
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="755" id="AutoNumber1" height="832">
    <!-- <tr>
      <td width="152" height="244" valign="top" align="center" >

    
       <div align="center">
         <center>
         <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber14" height="125">
           <tr>
             <td width="100%" height="15">
             <div align="center">
               <center>
               <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#CCCCCC" width="100%" id="AutoNumber15"  height="88" class="fontTable">
                 <tr>
                   <td width="100%" height="18" align="center" bgcolor="#C0C0C0" bordercolor="#FFFFCC"><b>
                   <font color="#FFFFCC"><a href="index.php">Home</a></font></b></td>
                 </tr>
                 <tr>
                   <td width="100%" height="18" align="center" bgcolor="#C0C0C0" bordercolor="#FFFFCC"><b>
                   <font color="#FFFFCC">
                   <a href="Building_equipments_Services.htm">Services</a></font></b></td>
                 </tr>
                 <tr>
                   <td width="100%" height="18" align="center" bgcolor="#C0C0C0" bordercolor="#FFFFCC"><b>
                   <font color="#FFFFCC">
                   <a href="Construction_Equipments_Products.php">Products</a></font></b></td>
                 </tr>
                 <tr>
                   <td width="100%" height="16" align="center" bgcolor="#C0C0C0" bordercolor="#FFFFCC"><b>
                   <font color="#FFFFCC">
                   <a href="Construction_Equipments_Contact.php">Contact Us</a></font></b></td>
                 </tr>
                 <tr>
                   <td width="100%" height="18" align="center" bgcolor="#C0C0C0" bordercolor="#FFFFCC"><b>
                   <font color="#FFFFCC">
                   <a href="Construction_Equipments_RoutMap.htm">Location</a></font></b></td>
                 </tr>
                 <tr>
                   <td width="100%" height="18" align="center" bgcolor="#C0C0C0" bordercolor="#FFFFCC"><b>
                   <font color="#FFFFCC">
                   <a href="about-us.html">About Us</a></font></b></td>
                 </tr>
               </table>
               </center>
             </div>
             </td>
           </tr>
           <tr>
             <td width="100%" height="110">
             <div align="center">
               <center>
               <table cellpadding="5" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber16" bgcolor="#FFFFFF">
                 <tr>
                   <td width="100%">
      <img border="0" src="newImages/logo.png" width="176" height="110" alt="Al Qudrah Used Bldg. Machines &amp; Equipments Trading."></td>
                 </tr>
               </table>
               </center>
             </div>
             </td>
           </tr>
         </table>
         </center>
      </div>
      </td>
      <td width="603" valign="top" height="244">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse"  width="100%" id="AutoNumber2">
          <tr>

          </tr>
          <tr>
            <td width="100%">
            <div align="right">
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber3" class="fontTable">
                <tr>
                  <td width="100%">
                  <img border="0" src="newImages/background2.png" width="580"></td>
                </tr>
                <tr>
                  <td width="100%">
                  <div align="center">
                    <center>
                    <table  cellpadding="0" cellspacing="0" style="border-collapse: collapse"  width="100%" id="AutoNumber5" >
                      <tr>
                        <td width="100%" >&nbsp;
                        </td>
                      </tr>
                    </table>
                    </center>
                  </div>
                  </td>
                </tr>
              </table>
            </div>
            </td>
          </tr>
        </table>
        </center>
      </div>
      </td>
    </tr> -->
    <tr>
      <td width="755" colspan="2" height="588" valign="top">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber4">
          <tr>
            <td width="97%">&nbsp;<div align="center">
              <center>
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="70%" id="AutoNumber6" class="fontTable">
                <tr>

                  <td width="100%">
                    <h1>Contact Us</h1><br>
&nbsp;<blockquote>
                                <p>Al Qudrah Used Bldg. Machines &amp; Equipments 
                
                  Trading.<br>
                  Machinery Sales <br>
                  Tel - 971561888019 <font color="#FFFFFF">/ 
                                6456479 </font> <br>
                                Whatsapp - +971561888019<br>
                                Email - accountsalqudrah@gmail.com<br>
                  P.0. Box: 35811, Sharjah<br>
                  United Arab Emirates ( UAE )<br>Email - mail@alqudrah-machinery.com<font style="font-size: 8pt"><br>
                              <br>
                  </font><b><font size="3" color="#008000">Enquiry about Item ID  <?=stripslashes($pro['itemid'])?></font></b></p>
</blockquote>


<!--<input name="pathinfo" value="http://localhost/Building_Machine_Equipments/ViewInDetail_cust.asp?ID=<%=Request("ID")%>&FileID=<%=Request("FileID")%>&choice=<%=Request("choice")%>" type="hidden">-->
                  <div align="center">
                  <?=$msg?>
                    
                    <form action="" method="post" name="feedbackform" >
                  <table width="330" height="185" border="0" style="border-collapse: collapse; font-family: Verdana, Arial, Helvetica, 'sans serif'; font-size: 11px; color: #666666" cellpadding="5" cellspacing="0" dir="ltr">
                    <tr>
                      <td width="84" height="25" dir="ltr" align="center">
                      <p dir="ltr" align="left">
                      <font style="font-size: 8pt" color="#FF0000">*</font><font style="font-size: 8pt" color="#000000">Company Name</font></td>

                      <td width="242" height="25" dir="ltr" align="center">
                      <p dir="ltr" align="left">
                      <font face="Verdana" style="font-size: 8pt">
                      <input size="35" name="CompanyName" maxlength="50" style="font-family: Verdana, Arial, Helvetica, 'sans serif'; float: left; border-style: solid; border-width: 1px">&nbsp;</font></td>
                    </tr>
        <center>
                    <tr>
                      <td width="84" height="22" dir="ltr" align="center">
                      <input type="hidden" value="<?=stripslashes($pro['itemid'])?>" name="ItemID">
                      <input type="hidden" value="<?=stripslashes($pro['name'])?>" name="pname">
                      <p dir="ltr" align="left"><font color="#000000">
                      <span style="font-size: 8pt">Contact Person</span></font></td>
                      <td width="242" height="22" dir="ltr" align="center">
                      <p dir="ltr" align="left">
                      <font face="Verdana" style="font-size: 8pt">
                      <input size="35" name="ContactPerson" maxlength="50" style="font-family: Verdana, Arial, Helvetica, 'sans serif'; float: left; border-style: solid; border-width: 1px"></font></td>
                    </tr>
                    <tr>
                      <td width="84" height="25" dir="ltr" align="center">
                      <p dir="ltr" align="left">
                      <font style="font-size: 8pt" color="#FF0000">*</font><font style="font-size: 8pt" color="#000000">Telephone</font></td>
                      <td width="242" height="25" dir="ltr" align="center">
                      <p dir="ltr" align="left">
                      <font face="Verdana" style="font-size: 8pt">
                      <input size="35" name="Telephone" maxlength="50" style="font-family: Verdana, Arial, Helvetica, 'sans serif'; float: left; border-style: solid; border-width: 1px"></font></td>
                    </tr>
                    <tr>
                      <td width="84" height="25" dir="ltr" align="center">
                      <p dir="ltr" align="left"><font color="#000000">
                      <span style="font-size: 8pt">Fax</span></font></td>
                      <td width="242" height="25" dir="ltr" align="center">
                      <p dir="ltr" align="left">
                      <font face="Verdana" style="font-size: 8pt">
                      <input size="35" name="Fax" maxlength="50" style="font-family: Verdana, Arial, Helvetica, 'sans serif'; float: left; border-style: solid; border-width: 1px"></font></td>
                    </tr>
                    <tr>
                      <td width="84" height="25" dir="ltr" align="center">
                      <p dir="ltr" align="left">
                      <font style="font-size: 8pt" color="#FF0000">*</font><font color="#000000"><span style="font-size: 8pt">Email</span></font></td>
                      <td width="242" height="25" dir="ltr" align="center">
                      <p dir="ltr" align="left">
                      <font face="Verdana" style="font-size: 8pt">
                      <input size="35" name="Email" maxlength="50" style="font-family: Verdana, Arial, Helvetica, 'sans serif'; float: left; border-style: solid; border-width: 1px"></font></td>
                    </tr>
                    <tr>
                      <td width="84" height="25" dir="ltr" align="center">
                      <p dir="ltr" align="left">
                      <font style="font-size: 8pt" color="#FF0000">*</font><font color="#000000"><span style="font-size: 8pt">City</span></font></td>
                      <td width="242" height="25" dir="ltr" align="center">
                      <p dir="ltr" align="left">
                      <font face="Verdana" style="font-size: 8pt">
                      <input size="35" name="City" maxlength="50" style="font-family: Verdana, Arial, Helvetica, 'sans serif'; float: left; border-style: solid; border-width: 1px"></font></td>
                    </tr>
                    <tr>
                      <td width="84" height="25" dir="ltr" align="center">
                      <p dir="ltr" align="left">
                      <font style="font-size: 8pt" color="#FF0000">*</font><font color="#000000"><span style="font-size: 8pt">Country</span></font></td>

                      <td width="242" height="25" dir="ltr" align="center">
                      <p dir="ltr" align="left">
                      <font face="Verdana" style="font-size: 8pt">
                      <input size="35" name="Country" maxlength="50" style="font-family: Verdana, Arial, Helvetica, 'sans serif'; float: left; border-style: solid; border-width: 1px"></font></td>
                    </tr>
       
                    <tr>
                      <td width="84" height="25" dir="ltr" align="center">
                      <p dir="ltr" align="left"><font color="#000000">
                      <span style="font-size: 8pt">Enquiry for</span></font></td>
       
                      <td width="242" height="25" dir="ltr" align="center">
                      <p dir="ltr" align="left">

<font color="#000000">Hire</font><input type="checkbox" name="Enquiry" value="Hire"><font color="#000000">&nbsp; Purchase
</font>
  <input type="checkbox" name="Enquiry" value="Purchase"><font color="#000000">&nbsp;&nbsp;&nbsp; Sale</font><input type="checkbox" name="Enquiry" value="Sale"><font color="#000000">
</font>
</td>
                    </tr>
     
                    <tr>
                      <td width="84" height="25" dir="ltr" align="center">
                      <p dir="ltr" align="left">
                      <font style="font-size: 8pt" color="#000000">Subject</font></td>
     
                      <td width="242" height="25" dir="ltr" align="center">
                      <p dir="ltr" align="left">
                      <font face="Verdana" style="font-size: 8pt">
                      <input size="35" name="Subject" maxlength="50" style="font-family: Verdana, Arial, Helvetica, 'sans serif'; float: left; border-style: solid; border-width: 1px"></font></td>
                    </tr>
        <center>
                    <tr>
                      <td width="84" height="24" bordercolor="#FFFFFF" valign="top" dir="ltr" align="center">
                      <p align="left" dir="ltr">
                      <font style="font-size: 8pt" color="#FF0000">*</font><b><font style="font-size: 8pt" color="#000000">Message</font></b></p>
                      <p dir="ltr" align="center">&nbsp;</td>
                      <td width="242" height="24" bordercolor="#FFFFFF" dir="ltr" align="center">
                      <p align="left" dir="ltr">
                      <font face="Verdana" style="font-size: 8pt">
                      <textarea style="font-family: Arial; border-style: solid; border-width: 1px" name="Message" rows="10" cols="35" align="right"></textarea></font></td>
                    </tr>
                    <tr>
                      <td width="84" height="24" bordercolor="#FFFFFF" dir="ltr" align="center">
                      <p align="left" dir="ltr">
                      <font style="font-size: 8pt" color="#FF0000">*</font><b><font style="font-size: 8pt" color="#000000">Security Code</font></b></p>
                      <p dir="ltr" align="center">&nbsp;</td>
                      <td width="242" height="24" bordercolor="#FFFFFF" dir="ltr" align="center">
                      <img src="<?php echo $_SESSION['captcha']['image_src'];?>" alt="capcha" id="captcha2"  name="captcha2" /><br/><br/><input type="hidden" name="capchaimage" id="capchaimage" value="<?=$_SESSION['captcha']['code']?>" />
	<input type="text" name="captchatext" id="captchatext"  class="field2" /><? echo $note; ?><br/>
	<span style="color:red;"><?=$_GET['error']?></span><br/>
<br/></td>
                    </tr>
                    <tr>
                      <td width="84" height="24" bordercolor="#FFFFFF" dir="ltr" align="center">
                      <p dir="ltr" align="center"></td>
                      <td width="242" height="24" bordercolor="#FFFFFF" dir="ltr" align="center">
                      <p dir="ltr" align="center">
                      <font face="Verdana" style="font-size: 8pt">
                      <input type="submit" value=" Send" style="font-family: Verdana, Arial, Helvetica, 'sans serif'; border-style: solid; border-width: 1px" name="button" id="button"><input type="reset" value="Reset" style="font-family: Verdana, Arial, Helvetica, 'sans serif'; border-style: solid; border-width: 1px"></font></td>
                    </tr>
                  </table>
                   </form>
                    </div>
         



</td>
                            </tr>
                <tr>
                  <td width="100%">&nbsp;</td>
                </tr>
              </table>
              </div>
            </td>
            <td width="3%" >&nbsp;</td>
          </tr>
        </table>
        </div>
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber7">
          <tr>
            <td width="100%" >&nbsp;</td>
          </tr>
          <tr>
      <td>
      <p align="center">�All rights reserved,&nbsp; At Qudrah Used Bldg. 
      Machines &amp; Equipments Trdg., Machinery Sales, Sharjah, United Arab 
      Emirates ( UAE )<br>
      <br>
      <font face="Verdana" size="1"></font></td>
          </tr>
        </table>
        </center>
      </div>
      </td>
    </tr>
  </table>
  </div>
 <script language="JavaScript" type="text/javascript" xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
 var frmvalidator  = new Validator("feedbackform");
 frmvalidator.EnableMsgsTogether();
//frmvalidator.addValidation("fname","req","Please enter your Company Name");
  //frmvalidator.addValidation("fname","maxlen=20",	"Max length for Company Name is 50");
  
  frmvalidator.addValidation("CompanyName","req","Please enter your Company Name");
 // frmvalidator.addValidation("company_name","req","Please enter your company name");
  frmvalidator.addValidation("Telephone","req" ,"Please enter your Telephone number ");
  frmvalidator.addValidation("Telephone","numeric","Phone number must be  numaric value");
  
  frmvalidator.addValidation("Email","maxlen=50");
  frmvalidator.addValidation("Email","req" ,"Please enter your  email ");
  frmvalidator.addValidation("Email","email");
   
    frmvalidator.addValidation("City","req","Please enter your City");
   frmvalidator.addValidation("Country","req","Please enter your Country");
     frmvalidator.addValidation("Message","req","Please enter your Message");
	 frmvalidator.addValidation("captchatext","req","Please enter your security code");
	 frmvalidator.addValidation("captchatext","eqelmnt=capchaimage","Security code not matching");

 
  //frmvalidator.addValidation("msg","req","Please enter your message");

  //]]></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>