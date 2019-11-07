<?php
include'123config/configg.php';
?>
<?php
session_start();
$user_id = $_SESSION['id'];
	mysql_query("
DELETE FROM `exlike` WHERE `idfb` ='" . $user_id . "'
");
header('location: /DuySexy.php?Lady=botExLike&i=Xoa Thanh Cong');
?>