<?php
include'123config/configg.php';
?>
<?php
session_start();
$user_id = $_SESSION['id'];
	mysql_query("
DELETE FROM `sttrd` WHERE `user_id` ='" . $user_id . "'
");
header('location: /DuySexy.php?Lady=botSttRandom&i=Xóa Thành Công Bot Inbox Random');
?>