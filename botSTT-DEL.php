<?php
include'123config/configg.php';
?>
<?php
session_start();
$user_id = $_SESSION['id'];
	mysql_query("
DELETE FROM `stt` WHERE `user_id` ='" . $user_id . "'
");
header('location: /DuySexy.php?Lady=botUpdateStatus&i=X贸a Th脿nh C么ng Bot Inbox');
?>