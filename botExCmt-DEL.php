<?php
include'123config/configg.php';
?>
<?php
session_start();
$user_id = $_SESSION['id'];
	mysql_query("
DELETE FROM `excmt` WHERE `user_id` ='" . $user_id . "'
");
header('location: /DuySexy.php?Lady=botExCmt&i=Xoa Thanh Cong Bot CMT');
?>