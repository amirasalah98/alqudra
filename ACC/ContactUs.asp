<%complete = "YesComplete"%>
<html>

<head>
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<LINK href="style.css" type=text/css rel=stylesheet>
<title>AirChem Consumables FZCO, Dubai, UAE</title>
</head>

<body class="smallFontTable" bgcolor="#CFE5F4" topmargin="0">

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="780" id="AutoNumber1" bgcolor="#FFFFFF">
    <tr>
      <td>
<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
 codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
 WIDTH="780" HEIGHT="135" id="Movie" ALIGN="">
 <PARAM NAME=movie VALUE="Movie.swf"> <PARAM NAME=quality VALUE=High> 
  <PARAM NAME=bgcolor VALUE=FFFFFF>
  <param name="_cx" value="20638">
  <param name="_cy" value="3572">
  <param name="FlashVars" value>
  <param name="Src" value="Movie.swf">
  <param name="WMode" value="Window">
  <param name="Play" value="-1">
  <param name="Loop" value="-1">
  <param name="SAlign" value>
  <param name="Menu" value="-1">
  <param name="Base" value>
  <param name="AllowScriptAccess" value="always">
  <param name="Scale" value="ShowAll">
  <param name="DeviceFont" value="0">
  <param name="EmbedMovie" value="0">
  <param name="SWRemote" value>
  <param name="MovieData" value>
  <EMBED src="Movie.swf" quality=high bgcolor=#FFFFFF  WIDTH="780" HEIGHT="135" NAME="../Movie" ALIGN=""
 TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED></OBJECT>
      </td>
    </tr>
    <tr>
      <td><map name="FPMap0">
      <area href="index.php" shape="rect" coords="277, 16, 344, 34">
      <area href="products.asp" shape="rect" coords="373, 15, 446, 32">
      <area href="contactUS.asp" shape="rect" coords="674, 14, 754, 32">
      <area href="index.asp" shape="rect" coords="617, 157, 651, 174">
      <area href="contactUs.asp" shape="rect" coords="710, 160, 739, 174">
      </map>
      <img border="0" src="images/index_02.jpg" width="780" height="175" usemap="#FPMap0"><br>
&nbsp;</td>
    </tr>
    <tr>
	<TD BGCOLOR=#FFFFFF STYLE="PADDING:15px 20px 15px 20px;">

     <table width="100%"  border="0" align="center">
            <tr>
              <td width="58%" valign="top">
              <table width="396" align="center" cellpadding="8" class="fontTable">
                <tr bgcolor="#B4C8ED">
                  <td width="86" valign="top" bgcolor="#ECF1FB" rowspan="2" align="left">&nbsp;<%
If Request("type")<>"" Then
Response.write "<p align=left><font face=verdana size=1 color=green><b>Your Order is attached,  Please fill your contact details and click send</b></font>"
End If
For i=0 to 30
If Session("Currency"&i) = "USD" Then
currUS = "Yes"
End If

If Session("Currency"&i) = "Euro" Then
currEuro = "Yes"
End If

If Session("Currency"&i) = "AED" Then
currAED = "Yes"
End If
On error resume next
Next

Message = "<table width=600 border=1 cellspacing=0 bordercolor=#66CCFF style=border-collapse:collapse cellpadding=3>"&_
"  <tr>"&_
"    <td width=20 align=center dir=ltr><b>Sl</b></td>"&_
"    <td width=196 align=center dir=ltr><b>Item Description</b> </td>"&_
"    <td width=42 dir=ltr><b>Container Size</b></td>"&_
"    <td width=42 dir=ltr><b>Price</b></td>"&_
"    <td width=29 dir=ltr><b>Qty</b></td>"&_
"   <td width=52 dir=ltr><b>Total</b></td>"&_
"  </tr>"
  

For i=0 to 30  
If Session("ProductName"&i)<>"" Then
If Session("Currency"&i) = "USD" Then
Message = Message&"<tr>"&_
"<td>"&i+1&"&nbsp;</td>"&_
"<td>"&Session("ProductName"&i)&"&nbsp;</td>"&_
"<td>"&Session("ConatainerSize"&i)&"</td>"&_
"<td align=right>"&FormatNumber(Session("Price"&i), 2)&"&nbsp;</td>"&_
"<td>"&Session("Qty"&i)&"&nbsp;</td>"&_
"<td align=right>"&FormatNumber((Ccur(Session("Price"&i)))*(Cint(Session("Qty"&i))), 2)&"&nbsp;</td>"


On error resume next
Amount = (Ccur(Session("Price"&i)))*(Cint(Session("Qty"&i)))
TotalAmountUS = TotalAmountUS+Amount
End If
End If
Next

If currUS = "Yes" Then
Message = Message&"<tr>"&_
    "<td width=400 colspan=7 align=right>"&_
    "<p align=right><b><br>"&_
    "Total Amount= USD "&FormatNumber(TotalAmountUS, 2)&"</b></td>"&_
  "</tr><tr><td colspan=7 bgcolor=cccccc>&nbsp</td></tr>"

End If  


For i=0 to 30  
If Session("ProductName"&i)<>"" Then
If Session("Currency"&i) = "Euro" Then
Message = Message&"<tr>"&_
"<td>"&i+1&"&nbsp;</td>"&_
"<td>"&Session("ProductName"&i)&"&nbsp;</td>"&_
"<td>"&Session("ConatainerSize"&i)&"</td>"&_
"<td align=right>"&FormatNumber(Session("Price"&i), 2)&"&nbsp;</td>"&_
"<td>"&Session("Qty"&i)&"&nbsp;</td>"&_
"<td align=right>"&FormatNumber((Ccur(Session("Price"&i)))*(Cint(Session("Qty"&i))), 2)&"&nbsp;</td>"


On error resume next
Amount = (Ccur(Session("Price"&i)))*(Cint(Session("Qty"&i)))
TotalAmountER = TotalAmountER+Amount
End If
End If
Next

If currEuro = "Yes" Then
Message = Message&"<tr>"&_
    "<td width=400 colspan=7 align=right>"&_
    "<p align=right><b><br>"&_
    "Total Amount= EURO "&FormatNumber(TotalAmountER, 2)&"</b></td>"&_
  "</tr><tr><td colspan=7 bgcolor=cccccc>&nbsp</td></tr>"

End If  


For i=0 to 30  
If Session("ProductName"&i)<>"" Then
If Session("Currency"&i) = "AED" Then
Message = Message&"<tr>"&_
"<td>"&i+1&"&nbsp;</td>"&_
"<td>"&Session("ProductName"&i)&"&nbsp;</td>"&_
"<td>"&Session("ConatainerSize"&i)&"</td>"&_
"<td align=right>"&FormatNumber(Session("Price"&i), 2)&"&nbsp;</td>"&_
"<td>"&Session("Qty"&i)&"&nbsp;</td>"&_
"<td align=right>"&FormatNumber((Ccur(Session("Price"&i)))*(Cint(Session("Qty"&i))), 2)&"&nbsp;</td>"


On error resume next
Amount = (Ccur(Session("Price"&i)))*(Cint(Session("Qty"&i)))
TotalAmountAD = TotalAmountAD+Amount
End If
End If
Next

If currAED = "Yes" Then
Message = Message&"<tr>"&_
    "<td width=400 colspan=7 align=right>"&_
    "<p align=right><b><br>"&_
    "Total Amount= AED "&FormatNumber(TotalAmountAD, 2)&"</b></td>"&_
  "</tr>"

End If
  
Message1 = Message&"</table>"
%>


                  </td>
                  <td width="339">Your contact details <span class="style12 style5"><br>
                    (Details marked red are required for successful submission) </span></td>
                </tr>
                <tr>
                  <td width="339" bgcolor="#B4C8ED">
                    
                    <table width="50%"  border="0" cellpadding="5" class="fontTable">
<FORM name=searchform action=<%= Request.ServerVariables("URL")%> method="Post"> 
                    
                      <tr>
                        <td width="108"><font color="<%if Request("CompanyName")="" Then
											Response.write "red"
											complete = "notcomplete"
											End If %>"> Company Name</font> </td>
                        <td width="311">
                          <input name="CompanyName" type="text" class="form1" size="35" value="<%=Request("CompanyName")%>"></td>
                      </tr>
                      <tr>
                        <td width="108"><font color="<%if Request("ContactPerson")="" Then
											Response.write "red"
											complete = "notcomplete"
											End If %>">Contact Person</font></td>
                        <td width="311">
                          <input name="ContactPerson" type="text" class="form1" id="ContactPerson" size="35" value="<%=Request("ContactPerson")%>"></td>
                      </tr>
                      <tr>
                        <td width="108"><font color="<%if Request("Telephone")="" Then
											Response.write "red"
											complete = "notcomplete"
											End If %>">Telephone Number</font></td>
                        <td width="311">
                          <input name="Telephone" type="text" class="form1" id="Telephone" size="35" value="<%=Request("Telephone")%>"></td>
                      </tr>
                      <tr>
                        <td width="108"><font color="<%if Request("Delivery")="" Then
											Response.write "red"
											complete = "notcomplete"
											End If %>">Delivery Point</font></td>
                        <td width="311">
<SELECT class=form1 name=Delivery> 
<OPTION value=""></OPTION>
<OPTION value='Dubai International Airport'>Dubai International Airport</OPTION>
<OPTION value='Amsterdam International Airport'>Amsterdam International Airport</OPTION>
</SELECT>                      </tr>

                    
                      <tr>
                        <td width="108"><font color="<%if Request("Email")="" OR len(Request.Form("Email"))<6 OR InStr(Request.Form("Email"),"@")=0 Then
											Response.write "red"
											complete = "notcomplete"
											End If %>">Email</font></td>
                        <td width="311">
                          <input name="Email" type="text" class="form1" id="Email" size="35" value="<%=Request("Email")%>"></td>
                      </tr>
                      <tr>
                        <td width="108">Job Title</td>
                        <td width="311">
                          <input name="Job" type="text" class="form1" id="Email0" size="35" value="<%=Request("Job")%>"></td>
                      </tr>
                      <tr>
                        <td width="108">Courier/Forwarder<br>
                        Address</td>
                        <td width="311">
                          <textarea name="Address" cols="35" rows="3" class="form1" id="Message0"><%=Request("Address")%></textarea></td>
                      </tr>
                      <tr>
                        <td width="108">Fax</td>
                        <td width="311">
                          <input name="Fax" type="text" class="form1" size="35" value="<%=Request("Fax")%>"></td>
                      </tr>
                      <tr>
                        <td width="108"><b>Enquiry / Message</b></td>
                        <td width="311">
                          <p align="right">
                            <textarea name="Message" cols="35" rows="8" class="form1" id="Message"><%=Request("Message")%></textarea>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="2" width="431">
                          <%if complete <> "YesComplete" Then %>
                          <input name="Submit" type="submit" value="  Send  ">
                          <% End If %>
                          <%
If complete = "YesComplete" Then

	For s=1 to 13
	If Request("interested" & s)<>"" Then
	newinterest = Request("interested" &s)
	interested = newinterest& "<br>" &interested
	J="False"
	End If
	Next
	

Message = Replace(Request("Message"),vbCrLf,"<br>")
Message = "Delivery Point : "&Request("Delivery")&"<br><br>"&_
"Email : " &Request("Email")& "<br><br>Company Name : " &Request("CompanyName")& "<br>Telephone: " & Request("Telephone")& "<br>Contact Person: " & Request("ContactPerson") &_
"<br>Job :" &Request("Job")& "  Fax :" &Request("Fax")& "  <br><br><b>Courier/Forwarder Address</b><br>" &Replace(Request("Address"),vbCrLf,"<br>")& "<br><br>" &interested& "<br><br> "& Message
Message = Replace(Message,vbCrLf,"<br>")&"<br><br><font face=verdana size=3><b>ORDER</b></font><br>"&Message1

Dim MyMail
Set MyMail = Server.CreateObject("Persits.MailSender")
MyMail.Charset = "windows-1256"
MyMail.Host = "sendmail.brinkster.com"
MyMail.body = Message
MyMail.IsHTML = True
MyMail.From = "info@habserver.net"
MyMail.Username = "info@habserver.net"
MyMail.Password = "habeeb"
MyMail.AddAddress "airacc@emirates.net.ae"
'MyMail.AddAddress "habeeb565@yahoo.com"
MyMail.Subject = "Eqnquiry from www.aerospace-acc.com"
if MyMail.send then
SendReport = "<p align=left><font face=verdana size=1 color=green><b>Thank you for interest in our company's products and services.  A business representative will be contacting you shortly.</center></b>"&_
"<p><font size=1>Please transfer the money of total value to ACC Bank Account.  Details of the bank account is as follows:"&_
"<p><b>Bank Name:</b>         Dubai Bank PJSC Jebel Ali Branch,Dubai UAE<br><br>"&_
"<b>Account Holder:</b>   AirChem Consumables FZCO.<br>"&_
"                        AED ACCT.#     01 010 201305 50<br>"&_
"                        USD ACCT.#     02 010 201305 50<br>"&_
"                        EURO ACCT.#   22 010 201305 50<br><br>"&_
"<b>SWIFT CODE:</b>      Dbxpaead</font>"
else
Response.Write("<font face=verdana color=red size=1>Message Not Sent, Please complete the column with red letters</font/>")
end if
set MyMail = Nothing
End If
%>
                        </td>
                      </tr>
                    </table>
                    <p> </td>
                </tr>
              </table></td>
              <td width="42%" valign="top"><table width="100%"  border="0" align="center" cellpadding="8" class="fontTable">
                <tr>
                  <td>
                  
<% Response.write SendReport %>                  
                  </td>
                </tr>
                <tr>
                  <td><hr noshade color="#0066FF" size="1"><span class="Heading">Contact Us</span><br>
                    <br>
                    <b><font size="2">Air<font color="#0000FF">Chem</font></font><font size="2"> 
                  Consumables FZCO</font></b><br>
                    P.O. Box: 261503, Jebel Ali Free Zone<br>
                  Dubai, United Arab Emirates<br>
                  <br>
                  Tel&nbsp;&nbsp; : +971 4 881 8084<br>
                  Fax&nbsp; : +971 4 881 6022<br>
                  <br>
                  Email : <a href="mailto:airacc@acc.ae">airacc@acc.ae</a></td>
                </tr>
              </table></td>
            </tr>
          </table> 
</TD>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><img border="0" src="movie_21.gif" width="780" height="49"></td>
    </tr>
  </table>
  </center>
</div>

<p align="center" dir="ltr">| <a href="index.php">About Us</a> | 
<a href="Products.asp">Products</a> | <a href="ContactUs.asp">Contact Us</a> |<br>
© All rights reserved AirChem Consumables FZCO, Dubai, UAE<br>
&nbsp;</p>

</body>

</html>