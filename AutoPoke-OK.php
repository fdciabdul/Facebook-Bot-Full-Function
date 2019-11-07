<?php
header( 'Content-Type: text/html; charset=UTF-8' );
$access_token= $_POST['access_token'];
$soluong= $_POST['soluong'];

$me = json_decode(auto('https://graph.facebook.com/me?access_token='.$access_token.''),true);
$home = json_decode(auto('https://graph.facebook.com/me/home?access_token='.$access_token.'&limit='.$soluong.'&fields=from'),true);

for($i=1;$i<=count($home[data]);$i++){
 if($home[data][$i-1][from][id] != $me[id]){
echo auto('https://graph.facebook.com/'.$home[data][$i-1][from][id].'/pokes?access_token='.$access_token.'&method=post').'<hr/>';
   }
}

mbalek('/DuySexy.php?Lady=AutoPoke&i='.urlencode('Auto Chọc Thành Công !!!'));

function mbalek($x){
print '<meta http-equiv="refresh" content="0;url='.$x.'"/>';
}

function auto($url){
   $ch=curl_init();
   curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
   curl_setopt($ch,CURLOPT_URL,$url);
   $cx=curl_exec($ch);
  curl_close($ch);
  return($cx);
  }
?> 