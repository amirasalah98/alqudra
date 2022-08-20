<?
include('qudrahmncp/operation.php');
$operation =new operation();
?>
<html>
<head>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<META HTTP-EQUIV="EXPIRES" CONTENT="0">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" type="text/css" href="style.css">
<script language="JavaScript"  src="qudrahmncp/js/ajx_js.js" type="text/javascript" xml:space="preserve"></script>

<title>View Products</title>
<SCRIPT language=JavaScript>
function pulldown_menu()
{
// Create a variable url to contain the value of the 
// selected option from the the form named pulldown and variable selectname
var url = document.pulldown.selectname.options[document.pulldown.selectname.selectedIndex].value

// Re-direct the browser to the url value
window.location.href = url 
}

function pulldown_menu1()
{
// Create a variable url to contain the value of the 
// selected option from the the form named pulldown and variable selectname
var url = document.pulldown1.selectname.options[document.pulldown1.selectname.selectedIndex].value

// Re-direct the browser to the url value
window.location.href = url 
}
</SCRIPT>

</head>

<body>
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="755" id="AutoNumber1">
    <tr>
      <td width="182" height="113" valign="top" align="center" bgcolor="#FFFFFF">

      <p align="left">
       <div align="center">
         <center>
         <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="69%" id="AutoNumber14" height="18">
           <tr>
             <td width="100%" height="15">
             <div align="center">
               <center>
               <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#FFFFFF" width="70%" id="AutoNumber15" bgcolor="#666666" height="88" class="fontTable">
                 <tr>
                   <td width="65%" height="88" align="center" bgcolor="#FFFFFF">
                   <img border="0" src="Logo.gif" alt="Al Qudrah Used Bldg. Machines &amp; Equipments Trading."></td>
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
      <td width="573" valign="top" height="113" bgcolor="#FFFFFF">
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber17">
          <tr>
            <td width="72%" valign="top">
            <div align="center">
              <center>
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber18">
                <tr>
                  <td width="270%" align="right" colspan="2" background="bg_rail.gif">&nbsp;</td>
                </tr>
                <tr>
                  <td width="62%" align="right" valign="top">
                  <p align="left"><img border="0" src="pic-title-products.gif"></td>
                  <td width="208%" align="right">
                  <div align="center">
               <center>
               <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#FFFFFF" width="100%" id="AutoNumber15" bgcolor="#666666" height="88" class="fontTable">
                 <tr>
                   <td width="7%" height="88" align="center" rowspan="5" bgcolor="#FFFFFF">&nbsp;
                   </td>
                   <td width="193%" height="18" align="center" bgcolor="#CCCCCC"><b>
                   <font color="#FFFFCC"><a href="index.php">Home</a></font></b></td>
                 </tr>
                 <tr>
                   <td width="193%" height="18" align="center" bgcolor="#CCCCCC"><b>
                   <font color="#FFFFCC">
                   <a href="Building_equipments_Services.htm">Services</a></font></b></td>
                 </tr>
                 <tr>
                   <td width="193%" height="18" align="center" bgcolor="#CCCCCC"><b>
                   <font color="#FFFFCC">
                   <a href="Construction_Equipments_Products.php">Products</a></font></b></td>
                 </tr>
                 <tr>
                   <td width="193%" height="16" align="center" bgcolor="#CCCCCC"><b>
                   <font color="#FFFFCC">
                   <a href="Construction_Equipments_Contact.php">Contact Us</a></font></b></td>
                 </tr>
                 <tr>
                   <td width="193%" height="18" align="center" bgcolor="#CCCCCC"><b>
                   <font color="#FFFFCC">
                   <a href="Construction_Equipments_RoutMap.htm">Location</a></font></b></td>
                 </tr>
               </table>
               </center>
             </div>
                  </td>
                </tr>
                <tr>
                  <td width="62%" align="right">&nbsp;
                  </td>
                  <td width="208%" align="right">
                  <p align="right">
                  

                  </td>
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
    </tr>
  </table>
  </center>
</div>

 <div align="center">
   <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="755" id="AutoNumber3" class="fontTable">
    <tr>
      <td>
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="755" id="AutoNumber1">
    <tr>
    </tr>
  </table>
  </center>
</div>

 <p>&nbsp;</p>
 <div align="center">
   <center>
   <table border="0" cellpadding="6" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="755" id="AutoNumber2" class="fontTable">
     <tr>
       <td width="20%" bgcolor="#666666"><b><font color="#FFFFFF">View Products</font></b></td>
       <td width="20%" bgcolor="#666666">
       <p align="right"><font color="#FFFFFF">Select another Category</font></td>
       <? $subct=$operation->getdata('alqudrah_subcategories','*',$primary,$id,$cond,$ordr,$start,$limit);
 ?>
       <td width="20%" bgcolor="#666666"><select name="subct" onChange="get_product(this.value)">
       <option value="" >Select One </option>
       <? if(count($subct)>0){ foreach($subct as $subct_key=>$subct_val){ ?>	
              <option value="<?=$subct_val['id']?>"><?=stripslashes($subct_val['name'])?></option>
<? }}?>
       </select></td>
                 
     </tr>
   </table>
   </center>
 </div>
 <p align="center"><br>
 </p>
<div align="center" id="display">
   <center>
   <table width="755" style="border-collapse: collapse" bordercolor="#FFFFFF" cellpadding="5" cellspacing="0" border="1" class="fontTable" id="tblfirst">
  <tr> 
      
      <td width="755" bgcolor="#666666" colspan="7"><font color="#FFFFFF"><b>
      Category:  </b></font></td>
      
  </tr>
  
  
  <tr> 
      
      <td width="153" bgcolor="#999999">Manufacturer</td>
      
      <td width="305" bgcolor="#999999"> Product</td>
      
      <td width="305" bgcolor="#999999"> Type</td>
      
      <td width="155" bgcolor="#999999"> Year</td>
      
      <td width="227" bgcolor="#999999"> Serial</td>
      <td width="100" bgcolor="#999999">
      </td>
      <td width="64" bgcolor="#999999">
      View</td>
  </tr>
   <? $about_us_data=$operation->getdata('alqudrah_products','*','sub_id',"'".$_GET['id']."'",'' ); 
			 foreach ($about_us_data as $val ) { @extract($val);?>
  <tr> 
     <form method="post" action="EditItem.asp" target="_self">
      
      <input name="ID" type="hidden" value="<?=$id?>">
      
      <td width="153" bgcolor="#CCCCCC"><?=stripslashes($manufacturer)?></td>
      
      <input name="ProductName" type="hidden" value="<%=Make%>">
      
      <td width="305" bgcolor="#CCCCCC"><?=stripslashes($name)?></td>
      
      <td width="305" bgcolor="#CCCCCC"><?=stripslashes($type)?></td>
      
      <td width="155" bgcolor="#CCCCCC"> <div align="center"><?=stripslashes($year)?></div></td>
      
      <input name="productSellingPrice" type="hidden" value="<?=stripslashes($year)?>">
      
      <td width="227" bgcolor="#CCCCCC"> <div align="center"><?=stripslashes($serial)?></div></td>
      <input name="productAvailableQty" type="hidden" value="<?=stripslashes($serial)?>">
      <td width="100" bgcolor="#CCCCCC">
      </td>
      <td width="64" bgcolor="#CCCCCC">
      <p align="center"><a href="ViewInDetail_cust.php?ID=<?=$id?>&cat_id=<?=$cat_id?>&sub_id=<?=$sub_id?>"><img border="0" src="photo.jpg"></a>
      <a href="ViewInDetail_cust.php?ID=<?=$id?>&cat_id=<?=$cat_id?>&sub_id=<?=$sub_id?>">Details&gt;&gt;</a>
      </td>
    </form>
  </tr><? }?>
</table>
   </center>
 </div>
 <p>&nbsp;</p>
 <div align="center">
   <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="755" id="AutoNumber3" class="fontTable">
    <tr>
      <td bgcolor="#666666">&nbsp;
      
      </td>
    </tr>
    <tr>
      <td>
      
      <br>
      ©All rights reserved,&nbsp; At Qudrah Used Bldg. 
      Machines &amp; Equipments Trdg., Machinery Sales, Sharjah, United Arab 
      Emirates ( UAE )<br>
      &nbsp;</td>
    </tr>
  </table>
   </center>
</div>


      </td>
    </tr>
    </table>
   </center>
</div>
</body>

</html>