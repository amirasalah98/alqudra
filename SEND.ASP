<html>
<% @ CODEPAGE=1256 %>
<head>
<style>
font { font-family: Verdana, Arial, Helvetica, "sans serif"; font-size: 14px; color: #666666;}
</style>
</head>
<body>
<font>
<%
	
	Valid = true
	
	If Request.Form("CompanyName")=""  Then
	Valid = "False"
	Response.write("No Company Name has found")
	%><br><br><%
	End If
	
	
	If Request.Form("Telephone")=""  Then
	Valid = "False"
	Response.write("Please Mention Your Telephone")
	%><br><br><%
	End If
	
	
	If Request.Form("City")=""  Then
	Valid = "False"
	Response.write("Please Mention Your City")
	%><br><br><%
	End If


	If Request.Form("CompanyName")=""  Then
	Valid = "False"
	Response.write("Please Mention Your Country")
	%><br><br><%
	End If


	If Request.Form("Message")=""  Then
	Valid = "False"
	Response.write("No message has found")
	%><br><br><%
	End If

	
	
	If Request.Form("Email")=""  Then
	Valid = "False"
	Response.write("Please Mention Your Email")
	%><br><br><%
	End If
	
	IF len(Request.Form("Email"))<6 OR InStr(Request.Form("Email"),"@")=0 Then
	Valid = "False"
	Response.write("Email Address is Not Correct, please click back and and correct it")
	%><br><br><%
	End IF	
	%>
<FORM>

  <p align="center"><INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);return true;"> </FORM>

<%
	
If valid=true Then

Message=Request("Message")
Message = Replace(Message,vbCrLf,"<br>")
Message = "<p align=left>" &Message & "<br>Company Name : " &Request("CompanyName")&"<br>Contact Person : "&Request("ContactPerson")&"<br>Telephone : "&Request("Telephone")&"Fax : "&Request("Fax")&"<br><br>Email :"&Request("Email")&""&_
"<br>City : "&Request("City")&"<br>Country : "&Request("Country")&"<br>Equiry for : "&Request("Enquiry")
If Request("ItemID")<>"" Then
Message = Message &"<br>Item <a href=http://www.alqudrah-machinery.com/Building_Machine_Equipments/ViewInDetail_cust.asp?ID="&Request("ItemID")&">Item</a>"
End If

Dim MyMail
Set MyMail = Server.CreateObject("Persits.MailSender")
MyMail.Charset = "windows-1256"
MyMail.Host = "sendmail.brinkster.com"
MyMail.body = Message
MyMail.IsHTML = True
MyMail.From = "mail@alqudrah-machinery.com"
MyMail.Username = "mail@alqudrah-machinery.com"
MyMail.Password = "123"
MyMail.AddAddress "mail@alqudrah-machinery.com"
MyMail.Subject = Request("Subject")& ", Telephone: " & Request("Telephone")
if MyMail.send then
Response.Write("Message Sent")
else
Response.Write("Message Not Sent")
end if
set MyMail = Nothing
%>


<p align="center"> 
<p align="center"> 


Thank you for contacting us.&nbsp; <br>
We shall get back to you as soon as possible.

 
<p align="center"><a target="_top" href="http://www.alqudrah-machinery.com">Click Here to go back to Home Page
</a>
<p>
<% End If %>

</font>
</body>
</html>