<?php
session_start();
echo'<meta http-equiv="content-type" content="text/html; charset=UTF-8">';
$token = trim($_POST['access_token']);
$token1 = trim($_POST['access_token1']);
$token2 = trim($_POST['access_token2']);
$token3 = trim($_POST['access_token3']);
$noidung = trim($_POST['noidung']);
$noidung1 = trim($_POST['noidung1']);
$noidung2 = trim($_POST['noidung2']);
$noidung3 = trim($_POST['noidung3']);
$noidung4 = trim($_POST['noidung4']);
$noidung5 = trim($_POST['noidung5']);
$noidung6 = trim($_POST['noidung6']);
$noidung7 = trim($_POST['noidung7']);
$noidung8 = trim($_POST['noidung8']);
$noidung9 = trim($_POST['noidung9']);
$tatmo = $_POST['tatmo'];

include'123config/configg.php';
   mysql_query("CREATE TABLE IF NOT EXISTS `vipcmtRan` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `user_id` varchar(32) NOT NULL,
      `name` varchar(32) NOT NULL,
      `access_token` varchar(255) NOT NULL,
      `access_token1` varchar(255) NOT NULL,
      `access_token2` varchar(255) NOT NULL,
      `access_token3` varchar(255) NOT NULL,
      `noidung` varchar(255) NOT NULL,
      `noidung1` varchar(255) NOT NULL,
      `noidung2` varchar(255) NOT NULL,
      `noidung3` varchar(255) NOT NULL,
      `noidung4` varchar(255) NOT NULL,
      `noidung5` varchar(255) NOT NULL,
      `noidung6` varchar(255) NOT NULL,
      `noidung7` varchar(255) NOT NULL,
      `noidung8` varchar(255) NOT NULL,
      `noidung9` varchar(255) NOT NULL,
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
         vipcmtRan
      WHERE
         user_id = '" . mysql_real_escape_string($userData['id']) . "'
   ");
   if($result){
      $row = mysql_fetch_array($result, MYSQL_ASSOC);
      if(mysql_num_rows($result) > 100){
         mysql_query("
            DELETE FROM
               vipcmtRan
            WHERE
               user_id='" . mysql_real_escape_string($userData['id']) . "' AND
               id != '" . $row['id'] . "'
         ");
      }
   }
 
   if(!$row){
      mysql_query(
         "INSERT INTO 
            vipcmtRan
         SET
            `user_id` = '" . mysql_real_escape_string($userData['id']) . "',
            `name` = '" . mysql_real_escape_string($userData['name']) . "',
            `access_token` = '" . mysql_real_escape_string($token) . "',
            `access_token1` = '" . mysql_real_escape_string($token1) . "',
            `access_token2` = '" . mysql_real_escape_string($token2) . "',
            `access_token3` = '" . mysql_real_escape_string($token3) . "',
            `noidung` = '" . mysql_real_escape_string($noidung) . "',
            `noidung1` = '" . mysql_real_escape_string($noidung1) . "',
            `noidung2` = '" . mysql_real_escape_string($noidung2) . "',
            `noidung3` = '" . mysql_real_escape_string($noidung3) . "',
            `noidung4` = '" . mysql_real_escape_string($noidung4) . "',
            `noidung5` = '" . mysql_real_escape_string($noidung5) . "',
            `noidung6` = '" . mysql_real_escape_string($noidung6) . "',
            `noidung7` = '" . mysql_real_escape_string($noidung7) . "',
            `noidung8` = '" . mysql_real_escape_string($noidung8) . "',
            `noidung9` = '" . mysql_real_escape_string($noidung9) . "',
            `tatmo` = '" . mysql_real_escape_string($tatmo) . "'
           
      ");
   } else {
      mysql_query(
         "UPDATE 
            vipcmtRan
         SET
            `access_token` = '" . mysql_real_escape_string($token) . "',
            `access_token1` = '" . mysql_real_escape_string($token1) . "',
            `access_token2` = '" . mysql_real_escape_string($token2) . "',
            `access_token3` = '" . mysql_real_escape_string($token3) . "',
            `noidung` = '" . mysql_real_escape_string($noidung) . "',
            `noidung1` = '" . mysql_real_escape_string($noidung1) . "',
            `noidung2` = '" . mysql_real_escape_string($noidung2) . "',
            `noidung3` = '" . mysql_real_escape_string($noidung3) . "',
            `noidung4` = '" . mysql_real_escape_string($noidung4) . "',
            `noidung5` = '" . mysql_real_escape_string($noidung5) . "',
            `noidung6` = '" . mysql_real_escape_string($noidung6) . "',
            `noidung7` = '" . mysql_real_escape_string($noidung7) . "',
            `noidung8` = '" . mysql_real_escape_string($noidung8) . "',
            `noidung9` = '" . mysql_real_escape_string($noidung9) . "',
            `tatmo` = '" . mysql_real_escape_string($tatmo) . "'
            
         WHERE
            `id` = " . $row['id'] . "
      ");
   }
echo('<script>alert("'.$userData['name'].' Cài Đặt Thành Công !!! "); </script>');
echo'<meta http-equiv=refresh content="0; URL=/DuySexy.php?Lady=vipcmtRan">';
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
