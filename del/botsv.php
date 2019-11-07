<!DOCTYPE HTML>
<html>

<head>
<meta charset="utf-8" />
  <title>BotSv</title><center>
<?php
include('data.php');
//count member
$babi = mysql_query ("SELECT name, COUNT(name) FROM botsv");
$rober = mysql_fetch_array($babi);
$rec=$rober['COUNT(name)'];
?>
<font size="4" color="red">Số Like Hack Được Bây Giờ Là : <?php echo $rec; ?></font></div></div>
<?php
include'data.php';
$items = mysql_query("SELECT * FROM botsv");
$thispage = $PHP_SELF;
$num = mysql_num_rows($items);
$per_page = 500;
$start = @$_GET['start'];
if(empty($start)) $start = 0;
?>
<center>
<?php
if($start+$per_page<$num){
?>
<?php
}

$result = mysql_query("SELECT * FROM botsv ORDER BY id LIMIT $start,$per_page");
if($result){
while($row = mysql_fetch_array($result))
{
$token = $row[access_token];
$userData = json_decode(file_get_contents('https://graph.facebook.com/me?access_token='.$token.'&fields=name,id'),true);print($userData[name]).'<br/>';
if(!$userData[name]){
mysql_query("
DELETE FROM
botsv
WHERE
access_token='" . mysql_real_escape_string($token) . "'
");
}
}
}
?>
