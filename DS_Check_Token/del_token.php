<?php

require('connect.php');
if (!isset($_POST['id'])) die();

$id = $_POST['id'];

mysql_query("DELETE FROM `$table` WHERE `user_id` = '$id'");



?>