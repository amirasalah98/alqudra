<?

class config
{
function __construct() {
$hostname="localhost";  
$username="webdesi4_usrdbalqudrahmachinery";      
$password="QvTmYn5942#";    
$conect = mysqli_connect($hostname, $username, $password);
mysqli_select_db($conect, "webdesi4_alqudrahmachinery");


}

function readvalues($sql) 
{
$hostname="localhost";  
$username="webdesi4_usrdbalqudrahmachinery";      
$password="QvTmYn5942#";    
$conect = mysqli_connect($hostname, $username, $password);
mysqli_select_db($conect, "webdesi4_alqudrahmachinery");

 $result = mysqli_query($conect,$sql);
 while($row = @mysqli_fetch_array($result))
		{
	
		$data[]= $row;
		
		}
		return $data;
}
function readvalue($sql) 
{
$hostname="localhost";  
$username="webdesi4_usrdbalqudrahmachinery";      
$password="QvTmYn5942#";    
$conect = mysqli_connect($hostname, $username, $password);
mysqli_select_db($conect, "webdesi4_alqudrahmachinery");
 $result = mysqli_query($conect,$sql);
 $row = @mysqli_fetch_array($result);
 return $row;
}
function query($sql) 
{
$hostname="localhost";  
$username="webdesi4_usrdbalqudrahmachinery";      
$password="QvTmYn5942#";    
$conect = mysqli_connect($hostname, $username, $password);
mysqli_select_db($conect, "webdesi4_alqudrahmachinery");
 return mysqli_query($conect,$sql);
}
function no_rows($sql) 
{
$hostname="localhost";  
$username="webdesi4_usrdbalqudrahmachinery";      
$password="QvTmYn5942#";    
$conect = mysqli_connect($hostname, $username, $password);
mysqli_select_db($conect, "webdesi4_alqudrahmachinery");
 return @mysqli_num_rows($sql);
}


function get_last_id()
{
$hostname="localhost";  
$username="webdesi4_usrdbalqudrahmachinery";      
$password="QvTmYn5942#";    
$conect = mysqli_connect($hostname, $username, $password);
mysqli_select_db($conect, "webdesi4_alqudrahmachinery");
 return mysqli_insert_id();
}

}

?>
