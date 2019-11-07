<?php
include'123config/configg.php';
?>
<?php
session_start();
$user_id = $_SESSION['id'];
	mysql_query("
DELETE FROM `sttrd1` WHERE `user_id` ='" . $user_id . "'
");
header('location: /?Lady=stt&i=Xóa Thành Công');
?>