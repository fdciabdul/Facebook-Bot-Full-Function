<?php
include'123config/configg.php';
?>
<?php
session_start();
$user_id = $_SESSION['id'];
	mysql_query("
DELETE FROM `simsimiib` WHERE `user_id` ='" . $user_id . "'
");
header('location: /DuySexy.php?Lady=botSimInbox&i=X贸a Th脿nh C么ng');
?>