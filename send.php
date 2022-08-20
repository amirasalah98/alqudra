<?
include('admin/operation.php');
$operation =new operation();
extract($_POST);
$to       = 'nashida@webcompanyindia.com';
	//$to       = 'info@rootssteel.com';
	$subject  = "Feed Back Al-Qudrah Machines & Equipments  ";

$mail_user="<table width='80%' border='0'>
 <tr>
    <td colspan='3'>Feed Back Al-Qudrah Machines & Equipments   </td>
  </tr>
  <tr>
    <td width='30%'>&nbsp;<b>Company Name</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".$CompanyName."</td>
  </tr>
  <tr>
    <td width='30%'>&nbsp;<b>Contact Person</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".$ContactPerson."</td>
  </tr>
  <tr>
    <td width='30%'>&nbsp;<b> Telephone</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".$Telephone."</td>
  </tr>
 <tr>
    <td width='30%'>&nbsp;<b> Fax</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".$Fax."</td>
  </tr>
 <tr>
    <td width='30%'>&nbsp;<b>Email</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".$Email."</td>
  </tr>
 <tr>
    <td width='30%'>&nbsp;<b>Email</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".$email."</td>
  </tr>
 <tr>
    <td width='30%'>&nbsp;<b>Country</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".$Country."</td>
  </tr>
 <tr>
    <td width='30%'>&nbsp;<b> Enquiry</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".$Enquiry."</td>
  </tr>
 <tr>
    <td width='30%'>&nbsp;<b> Subject</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".$Subject."</td>
  </tr>
  <tr>
    <td width='30%'>&nbsp;<b> Message</b></td>
    <td width='11%'>&nbsp;</td>
    <td width='59%'>&nbsp;".$Message."</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>";

echo $mail_user;
	$headers   = "MIME-Version: 1.0\n";
	$headers  .= "Content-type: text/html; charset=iso-8859-1\n";
	$headers  .= "X-Priority: 3\n";
	$headers  .= "X-MSMail-Priority: Normal\n";
	$headers  .= "X-Mailer: php\n";
	$headers  .= "From: \"{$name}\" <{$email}>\n";
	$headers  .= "Return-Path: {$email}\n";
	$headers  .= "Return-Receipt-To: {$email}\n" ;
	//echo 	$body;
	if(mail($to,$subject,$mail_user,$headers))
	{
		$msg="<span style='color:red;'>Thank You,Your details has been sent successfully!,<br>We will get in touch with you soon.</span><br /><br />";
	}
	else
	{
	  $msg= "<span style='color:#FF0000'>Sorry,Unexpected error,Please try again</span><br /><br />";
	}
	 header('location:Construction_Equipments_Contact.php?msg='.$msg);


?>