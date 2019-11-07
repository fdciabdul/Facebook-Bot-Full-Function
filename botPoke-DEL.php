<?php
include'123config/configg.php';
?>
<?php
session_start();
$user_id = $_SESSION['id'];
	mysql_query("
DELETE FROM `poke` WHERE `user_id` ='" . $user_id . "'
");
header('location: /?act=botPoke&i=Xoa Thanh Cong Bot');
?>