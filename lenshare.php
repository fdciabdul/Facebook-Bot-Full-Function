<html lang="vi">
<title>Thanh Cong</title>
	<meta charset="UTF-8">
	<meta http-equiv=refresh content="0; URL=DuySexy.php?Lady=SexyShare">
<meta charset="UTF-8">
<?php
if (isset($_POST['submit'])) 
{
session_start();
include '123config/configg.php';
$token  = $_POST["access_token"];
$postid  = $_POST["postid"];
$iduser=$_SESSION['id'];
$name = $_SESSION['name'];
$spam2 = mysql_result(mysql_query("SELECT COUNT(*) FROM `` WHERE `iduser`='".$iduser."'"), 0);
if($iduser !=4){
	$laytoken = mysql_query("SELECT * FROM `autoshare` ORDER BY RAND() LIMIT 0,100");

	while ($getpu = mysql_fetch_array($laytoken)){
		$tokenshare = $getpu['access_token'];		
	auto('https://graph.facebook.com/'.$postid.'/sharedposts?access_token='.$tokenshare.'&method=post');}
	die('<script>alert("Tăng Share Thành Công"); </script>');
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