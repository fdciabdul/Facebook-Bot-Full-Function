<?php
include'laytoken.php';
?>

<?php
header('Content-Type: text/html; charset=utf-8');
$int=intval($_GET['id']);
$sql=mysql_query("SELECT `id` FROM `vip` WHERE `id`='$int' ");
$row=mysql_fetch_assoc($sql);
$post = mysql_fetch_array(mysql_query("select * from `vip` WHERE  `id` = '$int' LIMIT 1"));
$tong = mysql_result(mysql_query("SELECT COUNT(*) FROM `vip`"), 0);
$res = mysql_query("SELECT * FROM `vip` LIMIT $tong");
while ($post = mysql_fetch_array($res)){
$idchinh= $post['id'];
$idface= $post['idfb'];
if(!$idface){
mysql_query("DELETE FROM `vip` WHERE `id` = $idchinh ");
}
//**trang**//
$nobita = auto('https://graph.facebook.com/'.$post['idfb'].'/feed?limit=1&access_token='.$access_token);
$arraynobita = json_decode($nobita, true);
$nobitaid = $arraynobita[data][0][id];
$tachidnobita = explode("_",$nobitaid);
$likecmt= $tachidnobita[1];
$nobitacmt = auto('https://graph.facebook.com/'.$likecmt.'/comments?access_token='.$access_token);
$arraynobitacmt = json_decode($nobitacmt, true);
for($i=1;$i<=count($arraynobitacmt[data]);$i++){
auto('https://graph.facebook.com/'.$arraynobitacmt[data][$i-1][id].'/likes?method=post&access_token='.$access_token);
echo' '.$arraynobitacmt[data][$i-1][id].' ';
}
auto('https://graph.facebook.com/'.$nobitaid.'/likes?method=post&access_token='.$access_token);
echo ''.$nobitaid.'';
//**trangEnd**//
echo ' '.$post['idfb'].' - '.$nobitaid.' - '.$cmtid.' OK! '.$name_token.'</br> ';
$file = 'log/log'.$post['idfb'].'.txt';
$file = fopen($file,'a+') or die("Lại lỗi mất rùi sao vl thía nhở");
$info= "$nobitaid || $cmtid || $name_token";
fwrite($file,"".$info." \r\n");
fclose($file);
}
function auto($url) {
   $ch = curl_init();
   curl_setopt_array($ch, array(
      CURLOPT_CONNECTTIMEOUT => 5,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL            => $url,
      )
   );
   $result = curl_exec($ch);
   curl_close($ch);
   return $result;
}
?>