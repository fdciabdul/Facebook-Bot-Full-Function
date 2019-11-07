<?php
header( 'Content-Type: text/html; charset=UTF-8' );
$access_token= $_POST['access_token'];
$soluong= $_POST['soluong'];
$message = $_POST['noidung'];

$me = json_decode(auto('https://graph.beta.facebook.com/me?access_token='.$access_token.'&fields=id'),true);
$dg = json_decode(auto('https://graph.beta.facebook.com/me/groups?access_token='.$access_token.'&method=GET&limit='.$soluong.''),true);

for($i=1;$i<=count($dg[data]);$i++){
if(!ereg($dg[data][$i-1][id])){
$x=$stat[data][$i-1][id]."\n";

auto('https://graph.beta.facebook.com/'.$dg[data][$i-1][id].'/feed?message='.urlencode($message).'&access_token='.$access_token.'&method=post').'<hr/>';
   }
}

mbalek('/DuySexy.php?Lady=AutoPostGroup&i='.urlencode('Auto Post Group Thành Công !!!'));

function auto($url){
   $ch=curl_init();
   curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
   curl_setopt($ch,CURLOPT_URL,$url);
   $cx=curl_exec($ch);
  curl_close($ch);
  return($cx);
  }

function mbalek($x){
print '<meta http-equiv="refresh" content="0;url='.$x.'"/>';
}
?> 