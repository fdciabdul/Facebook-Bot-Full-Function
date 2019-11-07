<?php
include'123config/configg.php';
?>
<?php
session_start();
$user_id = $_SESSION['id'];
	mysql_query("
DELETE FROM `confirm` WHERE `user_id` ='" . $user_id . "'
");
header('location: /?DS=botConfirm&i=Xoa Thanh Cong Bot');
?>