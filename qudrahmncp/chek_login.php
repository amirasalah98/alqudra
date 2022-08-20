<?
session_start();
if(!(isset($_SESSION['ad_id']))&&!(isset($_SESSION['username'])))
{
 header("Location:index.php");
}
?>