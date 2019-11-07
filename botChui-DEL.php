<?php
include'123config/configg.php';
?>
<?php
session_start();
$user_id = $_SESSION['id'];
	mysql_query("
DELETE FROM `botchui` WHERE `user_id` ='" . $user_id . "'
");
header('location: /DuySexy.php?Lady=botChui&i=Xóa Thành Công Bot Inbox Random');
?>