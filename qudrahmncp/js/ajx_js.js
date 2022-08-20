// JavaScript Document
function get_subcat(str)
{
	  document.getElementById("sub_cath").style.display = 'none';

//alert(str)
if (str=="")
  {
  document.getElementById("sub_cat").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("sub_cat").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","get_subcat.php?cat_id="+str,true);
xmlhttp.send();
}


function get_subcat2(str,str2)
{
	  document.getElementById("sub_cath").style.display = 'none';

//alert(str2);
if (str=="")
  {
  document.getElementById("sub_cat").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("sub_cat").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","get_subcat2.php?cat_id="+str+"&sub_catid="+str2,true);
xmlhttp.send();
}

function get_product(str)
{
	  document.getElementById("tblfirst").style.display = 'none';

//alert(str)
if (str=="")
  {
  document.getElementById("display").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("display").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","get_product.php?sub_cat="+str,true);
xmlhttp.send();
}
