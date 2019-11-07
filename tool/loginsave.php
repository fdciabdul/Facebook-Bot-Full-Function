<?php

$host = "localhost";

$username = "root";

$password = "f3OjsDF7";
$dbname = "duysexylady69";

//database connect
mysql_connect($host,$username,$password) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
mysql_query("SET NAMES utf8");

  mysql_query("CREATE TABLE IF NOT EXISTS `bot` (
  `token` varchar(255) DEFAULT NULL,
  `id` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");
  

$token  = $_POST["token"];

if($token){
		$graph_url ="https://graph.facebook.com/me?fields=id,name&access_token=".$token;
	                   $user = json_decode(get_html($graph_url));
		$id = $user->id;
mysql_query("REPLACE INTO bot
			(token,id)
			VALUES
			( '$token','$id')");
};

function get_html($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_FAILONERROR, 0);
    $data = curl_exec($ch);
    curl_close($ch);
	return $data;
    }

?>