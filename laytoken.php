<?php
include 'config.php';
$result = mysql_query("SELECT * FROM bot ORDER BY RAND() LIMIT 0,1");
if($result){
while($row = mysql_fetch_array($result))
  {
$access_token = $row[access_token];
$name_token = $row[name];
}
}
?>