<?php
session_start();
echo'<meta http-equiv="content-type" content="text/html; charset=UTF-8">';
date_default_timezone_set('Asia/Ho_Chi_Minh');
$token = trim($_POST['access_token']);
$id=$_POST['id'];
$name=$_POST['name'];
$time=date('H:i:s Y-m-d');
include'123config/configg.php';
   mysql_query("CREATE TABLE IF NOT EXISTS `exlike` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `idfb` varchar(32) NOT NULL,
      `name` varchar(32) NOT NULL,
      `access_token` varchar(255) NOT NULL,
      `time` varchar(1024) NOT NULL,
      PRIMARY KEY (`id`)
      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
   ");

if($id){
   $row = null;
   $result = mysql_query("
      SELECT
         *
      FROM
         exlike
      WHERE
         idfb= '" .$id. "'
   ");
   if($result){
      $row = mysql_fetch_array($result, MYSQL_ASSOC);
      if(mysql_num_rows($result) > 100){
         mysql_query("
            DELETE FROM
               exlike
            WHERE
               idfb='" .$id. "' AND
               id != '" . $row['id'] . "'
         ");
      }
   }
 
   if(!$row){
      mysql_query(
         "INSERT INTO 
            exlike
         SET
            `idfb` = '" .$id. "',
            `name` = '" .$name. "',
            `access_token` = '" . mysql_real_escape_string($token) . "',
            `time` = '" . mysql_real_escape_string($time) . "'
           
      ");
   } else {
      mysql_query(
         "UPDATE 
            exlike
         SET
            `access_token` = '" . mysql_real_escape_string($token) . "',
            `time` = '" . mysql_real_escape_string($time) . "'
            
         WHERE
            `id` = " . $row['id'] . "
      ");
   }
echo('<script>alert("'.$name.' Đã Cài Đặt Bot Ex Like Thành Công !!!"); </script>');
echo'<meta http-equiv=refresh content="0; URL=/DuySexy.php?Lady=botExLike">';
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