<?

class config
{
function __construct() {
/*$hostname="127.0.0.1";  
$username="root";      
$password="root";      
*/
$hostname="localhost";  
$username="webdesi4_usrdbalqudrahmachinery";       
$password="QvTmYn5942#";  

$conect= mysql_pconnect($hostname,$username,$password) or die ("Fail to connect database");
//mysql_select_db("alquadrah") or die("can not find database");
mysql_select_db("webdesi4_alqudrahmachinery") or die("can not find database");

}

function readvalues($sql) 
{
 $result = mysql_query($sql);
 while($row = @mysql_fetch_array($result))
		{
	
		$data[]= $row;
		
		}
		return $data;
}
function readvalue($sql) 
{
 $result = mysql_query($sql);
 $row = @mysql_fetch_array($result);
 return $row;
}
function query($sql) 
{
 return mysql_query($sql);
}
function no_rows($sql) 
{
 return @mysql_num_rows($sql);
}


function get_last_id()
{
 return mysql_insert_id();
}

}

?>