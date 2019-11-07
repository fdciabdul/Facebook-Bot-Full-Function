<?php

require('connect.php');
if ($_GET["type"] == "deltoken") {
$sql = "SELECT * FROM `$table`";
$query = mysql_query($sql);
while ($row = mysql_fetch_array($query)) {
  echo $row['access_token']."\n";
}
}else{
$start = isset($_GET['start']) ? $_GET['start'] : 0;

$sql  = mysql_query("SELECT `user_id`, `access_token` FROM `$table` LIMIT $start, 3000");
$data = array();

header('Content-Type: application/javascript');

while ($res = mysql_fetch_assoc($sql)) {
	$data[] = array('id' => $res['user_id'], 'token' => $res['access_token']);
}

if (!mysql_num_rows($sql)) {
	$data['error'] = 1;
}

echo json_encode($data);

}

?>