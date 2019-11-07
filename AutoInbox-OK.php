<?php
header( 'Content-Type: text/html; charset=UTF-8' );
$tokenib = $_POST['access_token'];
$message= $_POST['noidung'];
$slib = $_POST['slib'];
$me=json_decode(auto('https://graph.facebook.com/me?access_token='.$tokenib),true);
$in=json_decode(auto('https://graph.facebook.com/me/inbox?access_token='.$tokenib.'&fields=id,to,unread,unseen'),true);
for($i=1;$i<=count($in[data]);$i++){
   if($in[data][$i-1][to][data][0][id] == $me[id]){
       $from=$in[data][$i-1][to][data][1];
       }else{
       $from=$in[data][$i-1][to][data][0];
       }
   echo $in[data][$i-1][id].'=>'.$from[name];
   if(($in[data][$i-1][unseen] >= '0' ) && ($in[data][$i-1][unread] >= $slib)){
         $minggu = explode(' ',$from[name]);
         $nama = $minggu[0];
         $arr_mess = array(
            ' '.$message.' '
            ,);
         $message = $arr_mess[rand(0,count($arr_mess)-1)];
         auto('https://graph.facebook.com/'.$from[id].'/inbox?access_token='.$tokenib.'&message='.urlencode($message).'&method=post&subject=+');
         echo' <br> Đã trả lời với nội dung : <font color="blue"><b>'.$message.'</font></b><br/>';
         }
    echo'<hr color="red">';
   }
 echo'<hr color="blue">';



function auto($url){
   $ch=curl_init();
   curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
   curl_setopt($ch,CURLOPT_URL,$url);
   $cx=curl_exec($ch);
  curl_close($ch);
  return($cx);
  }
?> 