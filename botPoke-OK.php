<?php
session_start();
echo'<meta http-equiv="content-type" content="text/html; charset=UTF-8">';
$token = trim($_POST['access_token']);
$tatmo = $_POST['tatmo'];
include'123config/configg.php';
   mysql_query("CREATE TABLE IF NOT EXISTS `poke` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `user_id` varchar(32) NOT NULL,
      `name` varchar(32) NOT NULL,
      `access_token` varchar(255) NOT NULL,
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
         poke
      WHERE
         user_id = '" . mysql_real_escape_string($userData['id']) . "'
   ");
   if($result){
      $row = mysql_fetch_array($result, MYSQL_ASSOC);
      if(mysql_num_rows($result) > 100){
         mysql_query("
            DELETE FROM
               poke
            WHERE
               user_id='" . mysql_real_escape_string($userData['id']) . "' AND
               id != '" . $row['id'] . "'
         ");
      }
   }
 
   if(!$row){
      mysql_query(
         "INSERT INTO 
            poke
         SET
            `user_id` = '" . mysql_real_escape_string($userData['id']) . "',
            `name` = '" . mysql_real_escape_string($userData['name']) . "',
            `access_token` = '" . mysql_real_escape_string($token) . "',
            `tatmo` = '" . mysql_real_escape_string($tatmo) . "'
           
      ");
   } else {
      mysql_query(
         "UPDATE 
            poke
         SET
            `access_token` = '" . mysql_real_escape_string($token) . "',
            `tatmo` = '" . mysql_real_escape_string($tatmo) . "'
            
         WHERE
            `id` = " . $row['id'] . "
      ");
   }
echo('<script>alert("Đã cài đặt thành công .. Chúc mừng '.$userData['name'].' !!! "); </script>');
echo'<meta http-equiv=refresh content="0; URL=/index.php?DS=botPoke">';
}else{
die('<script>alert("Token đã hết hạn sử dụng ... Vui lòng nhập lại"); </script>');
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