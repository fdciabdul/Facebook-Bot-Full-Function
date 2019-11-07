<?php
include 'config.php';
?>

<?php
$int=intval($_GET['id']);
$sql=mysql_query("SELECT `id` FROM `exlike` WHERE `id`='$int' ");
$row=mysql_fetch_assoc($sql);
$post = mysql_fetch_array(mysql_query("select * from `exlike` WHERE  `id` = '$int' LIMIT 1"));
$res = mysql_query("SELECT * FROM `exlike` ORDER BY RAND() LIMIT 0,300");
while ($post = mysql_fetch_array($res)){
$result = mysql_query("SELECT * FROM `exlike` ORDER BY RAND() LIMIT 0,100");
if($result){
while($row = mysql_fetch_array($result))
  {
$access_token = $row[access_token];
$name_token = $row[name];


$idchinh= $post['id'];
$idface= $post['idfb'];
if(!$idface){
mysql_query("DELETE FROM `exlike` WHERE `id` = $idchinh ");
}
//**Like**//
$duysex = auto('https://graph.facebook.com/'.$post['idfb'].'/feed?limit=1&access_token='.$access_token);
$arrayduysex = json_decode($duysex, true);
$duysexid = $arrayduysex[data][0][id];
$tachiduysex = explode("_",$duysexid);
auto('https://graph.facebook.com/'.$duysexid.'/likes?method=post&access_token='.$access_token);
echo ''.$duysexid.'';
//**LikeEnd**//
echo ' '.$post['idfb'].' - '.$duysexid.' OK! '.$name_token.'</br> ';
$file = 'logex/log_'.$post['idfb'].'.txt';
$file = fopen($file,'a+') or die("Loi");
$info= "$duysexid || $name_token";
fwrite($file,"".$info." \r\n");
fclose($file);
}
}
}
function auto($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER,1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
?>
