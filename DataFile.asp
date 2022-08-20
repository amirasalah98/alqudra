<%

Dim oConn
Dim oRs
Dim sSQL
Dim nFileID

nFileID = Request.QueryString("PictureID")

If Not nFileID = "" And IsNumeric(nFileID) Then

	Set oConn = Server.CreateObject("ADODB.Connection")
	Set oRs = Server.CreateObject("ADODB.Recordset")

strDSN = "Provider=Microsoft.Jet.OLEDB.4.0;" & _
              "Data Source=c:\sites\Premium6\habeeb56\database\Qudra.mdb;" & _
              "Persist Security Info=False"

oConn.Open strDSN


	sSQL = "SELECT FileName, ContentType, BinaryData, PictureID FROM Files WHERE Files.PictureID = " & Request("PictureID")

	oRs.Open sSQL, oConn, 3, 3

	If Not oRs.EOF Then
		Response.ContentType = oRs(1)
		Response.BinaryWrite oRs(2)
	Else
		Response.Write("Picture not available")
	End If

	oRs.Close
	oConn.Close

	Set oRs = Nothing
	Set oConn = Nothing
Else
	Response.Write("Picture not available")
End If
%></body></html>