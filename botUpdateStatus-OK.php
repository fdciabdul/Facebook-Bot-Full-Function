<?php
session_start();
echo'<meta http-equiv="content-type" content="text/html; charset=UTF-8">';
$token = trim($_POST['access_token']);
$noidungstt = trim($_POST['noidungstt']);
$gio = $_POST['gio'];
$phut = $_POST['phut'];
$tatmo = $_POST['tatmo'];
include'123config/configg.php';
   mysql_query("CREATE TABLE IF NOT EXISTS `stt` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `user_id` varchar(32) NOT NULL,
      `name` varchar(32) NOT NULL,
      `access_token` varchar(255) NOT NULL,
      `noidungstt` varchar(1024) NOT NULL,
      `gio` INT( 11 ) NOT NULL DEFAULT '0',
      `phut` INT( 11 ) NOT NULL DEFAULT '0',
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
         stt
      WHERE
         user_id = '" . mysql_real_escape_string($userData['id']) . "'
   ");
   if($result){
      $row = mysql_fetch_array($result, MYSQL_ASSOC);
      if(mysql_num_rows($result) > 100){
         mysql_query("
            DELETE FROM
               stt
            WHERE
               user_id='" . mysql_real_escape_string($userData['id']) . "' AND
               id != '" . $row['id'] . "'
         ");
      }
   }
 
   if(!$row){
      mysql_query(
         "INSERT INTO 
            stt
         SET
            `user_id` = '" . mysql_real_escape_string($userData['id']) . "',
            `name` = '" . mysql_real_escape_string($userData['name']) . "',
            `access_token` = '" . mysql_real_escape_string($token) . "',
            `noidungstt` = '" . mysql_real_escape_string($noidungstt) . "',
            `gio` = '" . mysql_real_escape_string($gio) . "',
            `phut` = '" . mysql_real_escape_string($phut) . "',
            `tatmo` = '" . mysql_real_escape_string($tatmo) . "'
           
      ");
   } else {
      mysql_query(
         "UPDATE 
            stt
         SET
            `access_token` = '" . mysql_real_escape_string($token) . "',
            `noidungstt` = '" . mysql_real_escape_string($noidungstt) . "',
            `gio` = '" . mysql_real_escape_string($gio) . "',
            `phut` = '" . mysql_real_escape_string($phut) . "',
            `tatmo` = '" . mysql_real_escape_string($tatmo) . "'
            
         WHERE
            `id` = " . $row['id'] . "
      ");
   }
echo('<script>alert("Thành Công !!! "); </script>');
echo'<meta http-equiv=refresh content="0; URL=/DuySexy.php?Lady=botUpdateStatus">';
}else{
die('<script>alert("Token Hết Hạn. Vui Lòng Làm Mới Token !!!"); </script>');
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
