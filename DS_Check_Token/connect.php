<?php

$connect = mysql_pconnect('localhost', 'sexyteam_bot98x', 'Anhduy13071998!@#$%^&*(') or die('Cannot connect to Database');
mysql_select_db('sexyteam_bot98x', $connect) or die('DB_NAME not exists');
mysql_query("SET NAMES 'utf-8'", $connect);
$table =  'bot';
?>