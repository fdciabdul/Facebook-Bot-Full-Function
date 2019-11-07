<?php
session_start();
function auto($url){
   $ch=curl_init();
   curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
   curl_setopt($ch,CURLOPT_URL,$url);
   $cx=curl_exec($ch);
  curl_close($ch);
  return($cx);
}
$feed=json_decode(auto('http://api.ancms.systems/v1.0/inbox_ranks?access_token='.$_SESSION['access_token'].'&limit=10'),true);
for($u=0;$u<count($feed[array]);$u++){ 
$idstt = $feed[array][$u][id];  
<textarea> 
<?php echo $feed[array][$u][name]; ?>  - <?php echo $feed[array][$u][message_count]; ?></textarea>
}
?>