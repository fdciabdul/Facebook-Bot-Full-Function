<?php
session_start();
$feed=json_decode(file_get_contents('https://graph.facebook.com/me/conversations?access_token='.$_SESSION['access_token'].'&limit=10'),true);
for($u=0;$u<count($feed[data]);$u++){ 
$name = $feed[data][senders][u]data][u][name];
$ib = $feed[data][$u][message_count];  
?>
<?php echo $name; ?> - <?php echo $ib; ?>
<?php
}
?>