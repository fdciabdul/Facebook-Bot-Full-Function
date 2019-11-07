<html lang="vi">
<title>Thanh Cong</title>
	<meta charset="UTF-8">
	<meta http-equiv=refresh content="0; URL=DuySexy.php?Lady=SexyRate">
<meta charset="UTF-8">
<?php
if (isset($_POST['submit'])) 
{
session_start();
include '123config/configg.php';
$token  = $_POST["access_token"];
$idpage  = $_POST["idpage"];
$rate = $_POST[rate];
$iduser=$_SESSION['id'];
$name = $_SESSION['name'];
$spam2 = mysql_result(mysql_query("SELECT COUNT(*) FROM `` WHERE `iduser`='".$iduser."'"), 0);
if($spam2 == 0){
mysql_query("CREATE TABLE IF NOT EXISTS `` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `iduser` varchar(32) NOT NULL,
      `name` varchar(255) NOT NULL,
      `access_token` varchar(255) NOT NULL,
      `time` varchar(32) NOT NULL,
      PRIMARY KEY (`id`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
   ");
   mysql_query(
         "INSERT INTO 
            
         SET
            `iduser` = '" . mysql_real_escape_string($iduser) . "',
            `name` = '" . mysql_real_escape_string($name) . "',
            `access_token` = '" . mysql_real_escape_string($token) . "',
            `time` = '" . time() . "'
      ");
	$laytoken = mysql_query("SELECT * FROM `autorate` ORDER BY RAND() LIMIT 0,100");

	while ($getpu = mysql_fetch_array($laytoken)){
		$tokenrate = $getpu['access_token'];		
	auto('https://graph.facebook.com/'.$idpage.'/ratings?access_token='.$tokenrate.'&rating='.$rate.'&method=post');}
	die('<script>alert("Auto Đánh Giá Thành Công"); </script>');
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
