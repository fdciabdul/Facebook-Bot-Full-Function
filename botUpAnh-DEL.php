<?php
include'123config/configg.php';
?>
<?php
session_start();
$user_id = $_SESSION['id'];
	mysql_query("
DELETE FROM `botphoto` WHERE `user_id` ='" . $user_id . "'
");
header('location: /DuySexy.php?Lady=botUpAnh&i=Xóa Thành Công');
?>