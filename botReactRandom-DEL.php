<?php
include'123config/configg.php';
?>
<?php
session_start();
$user_id = $_SESSION['id'];
	mysql_query("
DELETE FROM `react1` WHERE `user_id` ='" . $user_id . "'
");
header('location: /?DS=botReactRandom&i=Xóa thành công');
?>