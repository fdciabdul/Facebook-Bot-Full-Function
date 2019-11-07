<?php
include'123config/configg.php';
?>
<?php
session_start();
$user_id = $_SESSION['id'];
	mysql_query("
DELETE FROM `treo` WHERE `user_id` ='" . $user_id . "'
");
header('location: /DuySexy.php?Lady=botLogin&i=Xóa Thành Công Bot Login');
?>